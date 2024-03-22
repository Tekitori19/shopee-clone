<?php
    // REMEMBER: use USE for return file
    $config = require basePath('config/db.php');

    $db = new Database($config);

    $products = $db->query('SELECT * FROM products')->fetchAll();
    // inspect($products);

    loadView('home');