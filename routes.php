<?php
$router->get('/', 'HomeController@index');

$router->get('/listings', 'ListingsController@index');
$router->post('/listings', 'ListingsController@store');

$router->get('/listings/create', 'ListingsController@create');
$router->get('/listings/{id}', 'ListingsController@detail');
$router->get('/listings/edit/{id}', 'ListingsController@edit');
$router->put('/listings/{id}', 'ListingsController@update');
$router->delete('/listings/{id}', 'ListingsController@destroy');

$router->get('/auth/login', 'UserController@login');
$router->post('/auth/login', 'UserController@authenticate');
$router->get('/auth/register', 'UserController@register');
$router->post('/auth/register', 'UserController@store');
$router->post('/auth/logout', 'UserController@logout');
$router->get('/checkout', 'CheckoutController@index');

$router->get('/dashboard', 'DashboardController@index');
$router->get('/dashboard/products', 'DashboardController@products');