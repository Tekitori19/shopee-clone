<?php
namespace App\Controllers;
use Framework_Tu_Code\Database;

class DashboardController
{
    protected $db;

    public function __construct() 
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index()
    {
        $users = $this->db->query(
            'SELECT
                orders.order_date,
                products.name,
                order_details.number_of_products,
                orders.status,
                users.fullname,
                users.phone_number,
                users.address 
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