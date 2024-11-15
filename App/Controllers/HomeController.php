<?php

namespace App\Controllers;

use App\Models\Product;
// REMEMBER: use REQUIRE for return file

class HomeController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index()
    {
        // $products = $this->db->query('SELECT * FROM products LIMIT 3')->fetchAll();

        $products = $this->model->getTop3Product();

        loadView('home', [
            'products' => $products,
            'home' => true
        ]);
    }
}
