<?php
namespace App\Controllers;
use Framework_Tu_Code\Database;
use PDOException;

class DashboardController
{
    protected $db;

    public function __construct() 
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function order()
    {
        $users = $this->db->query(
            'SELECT
                orders.order_date,
                products.name,
                order_details.number_of_products,
                orders.status,
                users.fullname,
                users.phone_number,
                users.address,
                order_details.id
            FROM
                orders
            JOIN
                order_details ON orders.id = order_details.order_id
            JOIN
                products ON order_details.product_id = products.id
            JOIN
                users ON orders.user_id = users.id;
        ')->fetchAll();

        loadView("dashboard/index", [
            'users' => $users
        ]);
    }

    public function detail_order($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];
        
        $sql = "SELECT
                orders.order_date,
                products.name,
                order_details.number_of_products,
                orders.status,
                users.fullname,
                users.phone_number,
                users.address,
                order_details.id
            FROM
                orders
            JOIN
                order_details ON orders.id = order_details.order_id
            JOIN
                products ON order_details.product_id = products.id
            JOIN
                users ON orders.user_id = users.id
            WHERE order_details.id = :id
        ";

        $user = $this->db->query($sql, $params)->fetch();

        // Kiểm tra nếu người dùng tồn tại
        if (!$user) {
            ErrorController::notFound('Không tìm thấy đơn hàng');
        return;
        }

        loadView('dashboard/detail_user', [
            'user' => $user
        ]);
    }

    public function destroy_order($params)
    {
        $id = $params['id'];
        
        $params = [
            'id' => $id
        ];

        try {
            $sql = "DELETE FROM order_details WHERE id = :id";
            $this->db->query($sql, $params);
        } catch (PDOException $e) {
            //throw $th;
        }

        //Set flash message
        $_SESSION['success_message'] = 'Xóa thành công';

        redirect('/dashboard');
    }

    public function edit_order($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];
        
        $sql = "SELECT
                orders.order_date,
                products.name,
                order_details.number_of_products,
                orders.status,
                users.fullname,
                users.phone_number,
                users.address,
                order_details.order_id
            FROM
                orders
            JOIN
                order_details ON orders.id = order_details.order_id
            JOIN
                products ON order_details.product_id = products.id
            JOIN
                users ON orders.user_id = users.id
            WHERE order_details.id = :id
        ";

        $user = $this->db->query($sql, $params)->fetch();

        // Kiểm tra nếu người dùng tồn tại
        if (!$user) {
            ErrorController::notFound('Không tìm thấy đơn hàng');
        return;
        }

        loadView('dashboard/edit', [
            'user' => $user
        ]);
    }

    public function update_order($params)
    {
        $id = $params['id'] ?? '';

        $status = $_POST['status'] ?? '';

        $params = [
            'id' => $id,
            'status' => $status
        ];

        $sql = "UPDATE orders SET status = :status WHERE id = :id";

        $this->db->query($sql, $params);

        $_SESSION["success_message"] = "Cập nhật sản phẩm thành công";

        redirect('/dashboard');
    
    }

    public function products() {
        $products = $this->db->query(
            " SELECT 
                products.id AS product_id,
                products.name AS product_name,
                IFNULL(SUM(order_details.total_money), 0) AS total_revenue,
                products.price,
                products.status
            FROM 
                products
            LEFT JOIN 
                order_details ON products.id = order_details.product_id
            GROUP BY 
                products.id, products.name, products.price, products.status
            ORDER BY 
                total_revenue DESC;"
            )->fetchAll();
    
        loadView("dashboard/products", [
            'products'=> $products
        ]);
    }
}