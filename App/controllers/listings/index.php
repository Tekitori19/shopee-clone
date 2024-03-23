<?php
    use Framework_Tu_Code\Database;
    // REMEMBER: use USE for return file
    $config = require basePath('config/db.php');

    $db = new Database($config);

    $products = $db->query('SELECT * FROM products')->fetchAll();
    // inspect($products);

    loadView('listings/index', [
        'products' => $products
    ]);