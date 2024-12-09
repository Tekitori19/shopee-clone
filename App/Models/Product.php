<?php

namespace App\Models;

use Framework_Tu_Code\Database;
use PDOException;

class Product
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function getTop3Product()
    {
        return $this->db->query(
            " SELECT  
                products.id,
                products.name,
                products.price,
                IFNULL(SUM(order_details.total_money), 0) AS total_revenue,
                products.status,
                products.picture,
                products.description,
                products.category_id
            FROM 
                products
            LEFT JOIN 
                order_details ON products.id = order_details.product_id
            GROUP BY 
                products.id, products.name, products.price, products.status
            ORDER BY 
                total_revenue DESC
            LIMIT 3;"
        )->fetchAll();
    }

    public function getAllProduct()
    {
        return $this->db->query('SELECT * FROM products ORDER BY id DESC')->fetchAll();
    }

    public function getProductById($params)
    {
        return $this->db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();
    }

    public function insertProduct($fields, $values, $newProduct)
    {
        $this->db->query("INSERT INTO products ({$fields}) VALUES ({$values})", $newProduct);
    }

    public function query($query, $data)
    {
        return $this->db->query($query, $data);
    }

    public function search($params)
    {
        $query = 'SELECT * FROM products WHERE 1=1';
        $queryParams = [];

        if ($params['product']) {
            $query .= ' AND (name LIKE :product OR description LIKE :product)';
            $queryParams['product'] = $params['product'];
        }

        if ($params['category']) {
            $query .= ' AND category_id = :category';
            $queryParams['category'] = $params['category'];
        }

        return $this->db->query($query, $queryParams)->fetchAll();
        // return $this->db->query('SELECT * FROM products WHERE (name LIKE :product OR description LIKE :product) OR category_id = :category', $params)->fetchAll();
    }

    public function update($updateFields, $updateValues)
    {
        $updateQuery = "UPDATE products SET $updateFields WHERE id = :id";
        $this->db->query($updateQuery, $updateValues);
    }

    public function destroy($params)
    {
        try {
            $sql = "DELETE od, p FROM order_details od
            INNER JOIN products p ON od.product_id = p.id
            WHERE p.id = :id";
            $this->db->query($sql, $params);
        } catch (PDOException $e) {
            throw $e;
        }

        try {
            $sql = "DELETE FROM products WHERE id = :id";
            $this->db->query($sql, $params);
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
