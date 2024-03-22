<?php
    $router->get('/', 'controllers/home.php');
    $router->get('/listings', 'controllers/listings/index.php');
    $router->get('/listings/create', 'controllers/listings/create.php');
    $router->get('/login', 'controllers/login/index.php');
    $router->get('/register', 'controllers/register/index.php');
    $router->get('/checkout', 'controllers/checkout/index.php');
    $router->get('/dashboard', 'controllers/dashboard/index.php');
    $router->get('/dashboard/products', 'controllers/dashboard/products.php');
    $router->get('/detail', 'controllers/detail/index.php');
