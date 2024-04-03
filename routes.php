<?php
$router->get('/', 'HomeController@index');

$router->get('/listings', 'ListingsController@index');
$router->post('/listings', 'ListingsController@store');

$router->get('/listings/create', 'ListingsController@create');
$router->get('/listings/{id}', 'ListingsController@detail');
$router->get('/listings/edit/{id}', 'ListingsController@edit');
$router->put('/listings/{id}', 'ListingsController@update');
$router->delete('/listings/{id}', 'ListingsController@destroy');

$router->get('/login', 'LoginController@index');
$router->get('/register', 'RegisterController@index');
$router->get('/checkout', 'CheckoutController@index');

$router->get('/dashboard', 'DashboardController@index');
$router->get('/dashboard/products', 'DashboardController@products');