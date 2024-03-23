<?php
namespace App\Controllers;
use Framework_Tu_Code\Database;

class ListingsController
{
    protected $db;
    
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index()
    {
        $products = $this->db->query('SELECT * FROM products')->fetchAll();

        loadView('listings/index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        loadView("listings\create");
    }

    public function detail()
    {
        $id = $_GET['id'] ?? '';

        $params = [
            'id' => $id,
        ];
    
        $product = $this->db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();
    
        loadView("listings/detail", [
            'product' => $product
        ]);
    }
}