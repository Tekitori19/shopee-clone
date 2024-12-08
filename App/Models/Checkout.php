<?php

namespace App\Models;

use Framework_Tu_Code\Database;

class CheckOut
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function getUserByID($id)
    {
        return $this->db->query('SELECT * FROM users WHERE id = :id', ['id' => $id])->fetch();
    }

    public function getLastInsertedID()
    {
        return $this->db->conn->lastInsertId();
    }

    public function getProductIDByName($param)
    {
        return $this->db->query("SELECT id FROM products WHERE name = :name", $param)->fetch();
    }

    public function insertOrder($params)
    {
        $sql_insert_order = "INSERT INTO orders (user_id, status, total_money) VALUES (:user_id, :order_status, :order_total)";
        $this->db->query($sql_insert_order, $params);
    }

    public function insertOrderZalopay($params)
    {
        $sql_insert_order = "INSERT INTO orders (user_id, status, total_money, online_payment) VALUES (:user_id, :order_status, :order_total, 1)";
        $this->db->query($sql_insert_order, $params);
    }

    public function insertOrderDetails($params)
    {
        $sql_insert_order_details =
            "INSERT INTO order_details (order_id, product_id, price, number_of_products, total_money) 
            VALUES (:new_order_id, :product_id, :price, :quantity, :total_money)";

        $this->db->query($sql_insert_order_details, $params);
    }

    public function updateMoneyOrder($params)
    {
        $sql_update_order_total = "UPDATE orders SET total_money = :order_total WHERE id = :new_order_id";

        $this->db->query($sql_update_order_total, $params);
    }


    public function loadAllOrder($params)
    {
        // $sql = " SELECT 
        //     o.id as order_id, 
        //     o.message, 
        //     o.order_date, 
        //     o.status, 
        //     o.total_money as order_total, 
        //     od.product_id, 
        //     p.name as product_name, 
        //     od.price as product_price, 
        //     od.number_of_products, 
        //     od.total_money as product_total 
        //     FROM orders o
        //     LEFT JOIN order_details od ON o.id = od.order_id
        //     LEFT JOIN products p ON od.product_id = p.id
        //     WHERE o.user_id = :user_id
        // ";


        $sql = " SELECT 
            o.id as order_id, 
            o.message, 
            o.order_date, 
            o.status, 
            o.total_money as order_total, 
            od.product_id, 
            p.name as product_name, 
            p.picture as product_picture, 
            od.price as product_price, 
            od.number_of_products, 
            od.total_money as product_total,
            u.address as user_address,
            u.phone_number as user_phone
            FROM orders o
            LEFT JOIN order_details od ON o.id = od.order_id
            LEFT JOIN products p ON od.product_id = p.id
            LEFT JOIN users u ON o.user_id = u.id
            WHERE o.user_id = :user_id
        ";
        return $this->db->query($sql, $params)->fetchAll();
    }
}
