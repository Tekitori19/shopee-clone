<?php
    use Framework_Tu_Code\Database;
    // REMEMBER: use USE for return file
    $config = require basePath('config/db.php');

    $db = new Database($config);

    $products = $db->query(
        'SELECT 
            products.id AS product_id,
            products.name AS product_name,
            SUM(order_details.total_money) AS total_revenue,
            products.price,
            products.name,
            products.status
        FROM 
            products
        JOIN 
            order_details ON products.id = order_details.product_id
        GROUP BY 
            products.id, products.name
        ORDER BY 
            total_revenue DESC;'
        )->fetchAll();

    // inspect($products);

    loadView("dashboard/products", [
        'products'=> $products
    ]);