<?php
$router->get('/', 'HomeController@index');

$router->get('/listings', 'ListingsController@index');
$router->get('/listings/create', 'ListingsController@create');
$router->get('/listing/{id}', 'ListingsController@detail');

$router->get('/login', 'LoginController@index');
$router->get('/register', 'RegisterController@index');
$router->get('/checkout', 'CheckoutController@index');

$router->get('/dashboard', 'DashboardController@index');
$router->get('/dashboard/products', 'DashboardController@products');
