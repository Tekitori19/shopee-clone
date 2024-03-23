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

    public function detail($params)
    {
        $id = $params['id'];

        $params = [
            'id' => $id,
        ];
    
        $product = $this->db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();

        if (!$product) {
            ErrorController::notFound("Không tìm thấy sản phẩm");
            return;
        }
    
        loadView("listings/detail", [
            'product' => $product
        ]);
    }

    public function store()
    {
        $validArray = ['fullname', 'price','category', 'description'];
        $newProduct = array_intersect_key($_POST, array_flip($validArray));

        // !!IMAGE UPLOAD HAS SOME BUG I CAN'T UPLOAD

        // $newProduct['picture'] = "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"; 
        $newProduct['picture']="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg";

        $newProduct = array_map('sanitize', $newProduct);

        inspect($newProduct);
    }
}