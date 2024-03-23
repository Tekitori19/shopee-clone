<?php
$router->get('/', 'HomeController@index');

$router->get('/listings', 'ListingsController@index');
$router->post('/listings', 'ListingsController@store');
$router->get('/listings/create', 'ListingsController@create');
$router->get('/listings/{id}', 'ListingsController@detail');
$router->delete('/listings/{id}', 'ListingsController@destroy');

$router->get('/login', 'LoginController@index');
$router->get('/register', 'RegisterController@index');
$router->get('/checkout', 'CheckoutController@index');

$router->get('/dashboard', 'DashboardController@index');
$router->get('/dashboard/products', 'DashboardController@products');
// $router->delete('/dashboard/products', 'DashboardController@destroy');
