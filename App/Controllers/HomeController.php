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

        loadView('home', [
            'products' => $products,
            'home' => true
        ]);
    }
}