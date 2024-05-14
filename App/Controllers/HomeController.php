<?php
namespace App\Controllers;
use Framework_Tu_Code\Database;
// REMEMBER: use REQUIRE for return file

class HomeController
{
    protected $db;
    
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index()
    {
        $products = $this->db->query('SELECT * FROM products LIMIT 3')->fetchAll();

        $products = $this->db->query(
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

        loadView('home', [
            'products' => $products,
            'home' => true
        ]);
    }
}