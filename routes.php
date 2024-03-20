<?php
    $router->get('/', 'controllers\home.php');
    $router->get('/listings', 'controllers\listings\index.php');
    $router->get('/listings/create', 'controllers\listings\create.php');
    $router->get('/login', 'controllers/login/index.php');
    $router->get('/register', 'controllers/register/index.php');
