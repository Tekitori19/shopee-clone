<?php
    use Framework_Tu_Code\Database;

    // REMEMBER: use REQUIRE for return file
    $config = require basePath('config/db.php');

    $db = new Database($config);

    $products = $db->query('SELECT * FROM products')->fetchAll();

    loadView('home', [
        'products' => $products,
        'home' => true
    ]);