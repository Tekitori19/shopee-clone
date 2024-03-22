<?php

    $config = require_once basePath('/config/db.php');
    $db = new Database($config);

    $products = $db->query("SELECT * FROM products")->fetchAll();

    // echo $products;

    loadView('home');