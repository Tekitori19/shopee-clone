<?php
    use Framework_Tu_Code\Database;
    // REMEMBER: use REQUIRE for return file
    $config = require basePath('config/db.php');

    $db = new Database($config);

    $id = $_GET['id'];

    $params = [
        'id' => $id,
    ];

    $product = $db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();

    loadView("listings/detail", [
        'product' => $product
    ]);