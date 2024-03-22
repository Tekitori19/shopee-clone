<?php
    // REMEMBER: use REQUIRE for return file
    $config = require basePath('config/db.php');

    $db = new Database($config);

    $id = $_GET['id'];

    $params = [
        'id' => $id,
    ];

    $products = $db->query('SELECT * FROM products WHERE id = :id', $params)->fetchAll();

    inspect($products);

    loadPartial("head");
    loadPartial("navbar");
    loadPartial("detail");