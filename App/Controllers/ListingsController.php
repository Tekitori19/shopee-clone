<?php
namespace App\Controllers;
use Framework_Tu_Code\Database;
use Framework_Tu_Code\Validation;
use PDOException;

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
        $products = $this->db->query('SELECT * FROM products ORDER BY id DESC')->fetchAll();

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
        $validArray = ['name', 'price','category_id', 'description', 'picture'];
        $newProduct = array_intersect_key($_POST, array_flip($validArray));

        // !!IMAGE UPLOAD HAS SOME BUG I CAN'T UPLOAD

        // $newProduct['picture'] = "https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"; 
        // $newProduct['picture']="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg";

        $newProduct = array_map('sanitize', $newProduct);
        $requiredFields = ['name', 'price','category_id', 'description', 'picture'];

        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($newProduct[$field]) || !Validation::string($newProduct[$field])) {
              $errors[$field] = ucfirst($field) . ' is required';
            }
          }
      
        if (!empty($errors)) {
            loadView('listings/create', [
                'errors' => $errors,
                'listing' => $newProduct
            ]);
        } else {
            // $this->db->query('INSERT INTO products (name, status, price, picture, description, category_id) VALUES
            // (:name, 1, :price, :picture, :description, :category);', $newProduct);
         
            $fields = [];

            foreach ($newProduct as $field => $value) {
                $fields[] = $field;
            }

            $fields = implode(', ', $fields);

            $values = [];
            
            foreach ($newProduct as $field => $value) {
                if ($values === '') {
                    $newProduct[$field] = null;
                }
                $values[] = ":" . $field;
            }

            $values = implode(', ', $values);
            // inspect($fields);
            // inspect($values);

            $query = "INSERT INTO products ({$fields}) VALUES ({$values})";

            $this->db->query($query, $newProduct);
            redirect("/listings");
        }
    }

    public function destroy($params)
    {
        $id = $params['id'];
        
        $params = [
            'id' => $id
        ];

        try {
            $sql = "DELETE od, p FROM order_details od
            INNER JOIN products p ON od.product_id = p.id
            WHERE p.id = :id";
            $this->db->query($sql, $params);
        } catch (PDOException $e) {
            //throw $th;
        }

        try {
            $sql = "DELETE FROM products WHERE id = :id";
            $this->db->query($sql, $params);
        } catch (PDOException $e) {
            //throw $th;
        }

        //Set flash message
        $_SESSION['success_message'] = 'Xóa thành công';

        redirect('/dashboard/products');
    }

    public function edit($params)
    {
        $id = $params['id'] ?? '';

        $params = [
        'id' => $id
        ];

        $product = $this->db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();

        // Check if product exists
        if (!$product) {
        ErrorController::notFound('Listing not found');
        return;
        }


        loadView('listings/edit', [
        'product' => $product
        ]);
    }

    public function update($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        // inspect()

        $product = $this->db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();

        // Check if product$product exists
        if (!$product) {
            ErrorController::notFound('product not found');
            return;
        }

        $validArray = ['name', 'price','category_id', 'description', 'status'];

        $updateValues = [];

        $updateValues = array_intersect_key($_POST, array_flip($validArray));

        $updateValues = array_map('sanitize', $updateValues);

        $requiredFields = ['name', 'price','category_id', 'description', 'status'];

        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($updateValues[$field]) || !Validation::string($updateValues[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            }
        }

        if (!empty($errors)) {
            loadView('listings/edit', [
                'product' => $product,
                'errors' => $errors
            ]);
            exit;
        } else {
            // Submit to database
            $updateFields = [];

            foreach (array_keys($updateValues) as $field) {
                $updateFields[] = "{$field} = :{$field}";
            }

            $updateFields = implode(', ', $updateFields);
            
            // inspectAndDie($updateValues);

            $updateQuery = "UPDATE products SET $updateFields WHERE id = :id";

            $updateValues['id'] = $id;
            $this->db->query($updateQuery, $updateValues);

            $_SESSION["success_message"] = "Cập nhật sản phẩm thành công";

            redirect('/listings/' . $id);
        }
    }

    public function search() {
        $product = $_GET['product'] ?? '';

        $params = [
            'product' => "%{$product}%",
        ];

        $sql = "SELECT * FROM products WHERE name LIKE :product OR description LIKE :product";

        $products = $this->db->query($sql, $params)->fetchAll();

        loadView('listings/index', [
            'products' => $products
        ]);
    }

}