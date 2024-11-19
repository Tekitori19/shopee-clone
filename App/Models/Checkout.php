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
}
