<?php

namespace App\Models;

use Framework_Tu_Code\Database;
use PDOException;

class Dashboard
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function loadOrder()
    {
        return $this->db->query(
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
        '
        )->fetchAll();
    }

    public function loadOrderDetails($params)
    {
        $sql = "SELECT
                orders.order_date,
                products.name,
                order_details.number_of_products,
                orders.status,
                users.fullname,
                users.phone_number,
                users.address,
                order_details.order_id,
                order_details.total_money
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

        return $this->db->query($sql, $params)->fetch();
    }

    public function detailOrder($params)
    {
        $sql = "SELECT
                orders.order_date,
                products.name,
                order_details.number_of_products,
                orders.status,
                users.fullname,
                users.phone_number,
                users.address,
                order_details.id,
                order_details.total_money as 'total'
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


        return $this->db->query($sql, $params)->fetch();
    }

    public function deleteOrder($params)
    {
        try {
            $sql = "DELETE FROM order_details WHERE id = :id";
            $this->db->query($sql, $params);
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function updateStatusOrder($params)
    {
        $sql = "UPDATE orders SET status = :status WHERE id = :id";

        $this->db->query($sql, $params);
    }


    public function loadProduct()
    {
        return $this->db->query(
            " SELECT 
                products.id AS product_id,
                products.name AS product_name,
                IFNULL(SUM(order_details.total_money), 0) AS total_revenue,
                products.price,
                products.status,
                products.picture
            FROM 
                products
            LEFT JOIN 
                order_details ON products.id = order_details.product_id
            GROUP BY 
                products.id, products.name, products.price, products.status
            ORDER BY 
                total_revenue DESC;"
        )->fetchAll();
    }

    public function searchOrders($params)
    {
        $sql = "SELECT
                orders.order_date,
                products.name,
                order_details.number_of_products,
                orders.status,
                users.fullname,
                users.phone_number,
                users.address,
                order_details.id,
                order_details.total_money as 'total'
            FROM
                orders
            JOIN
                order_details ON orders.id = order_details.order_id
            JOIN
                products ON order_details.product_id = products.id
            JOIN
                users ON orders.user_id = users.id
            WHERE (users.fullname LIKE :user OR users.phone_number LIKE :user OR users.address LIKE :user OR orders.status LIKE :user)
        ";

        return $this->db->query($sql, $params)->fetchAll();
    }

    public function searchProducts($params)
    {
        $sql = " SELECT 
                    products.id AS product_id,
                    products.name AS product_name,
                    IFNULL(SUM(order_details.total_money), 0) AS total_revenue,
                    products.price,
                    products.status,
                    products.picture
                FROM 
                    products
                LEFT JOIN 
                    order_details ON products.id = order_details.product_id
                WHERE (products.name LIKE :items OR products.description LIKE :items OR products.price LIKE :items)
                GROUP BY 
                    products.id, products.name, products.price, products.status
                ORDER BY 
                    total_revenue DESC
                ;";

        return $this->db->query($sql, $params)->fetchAll();
    }
}
