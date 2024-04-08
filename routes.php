<?php
$router->get('/', 'HomeController@index');

$router->get('/listings', 'ListingsController@index');
$router->post('/listings', 'ListingsController@store', ['admin']);

$router->get('/listings/create', 'ListingsController@create', ['admin']);
$router->get('/listings/{id}', 'ListingsController@detail');
$router->get('/listings/edit/{id}', 'ListingsController@edit', ['admin']);
$router->put('/listings/{id}', 'ListingsController@update', ['admin']);
$router->delete('/listings/{id}', 'ListingsController@destroy', ['admin']);

$router->get('/auth/login', 'UserController@login', ['guest']);
$router->post('/auth/login', 'UserController@authenticate', ['guest']);
$router->get('/auth/register', 'UserController@register', ['guest']);
$router->post('/auth/register', 'UserController@store', ['guest']);
$router->post('/auth/logout', 'UserController@logout', ['auth']);
$router->get('/checkout', 'CheckoutController@index', ['auth']);

$router->get('/dashboard', 'DashboardController@index', ['admin']);
$router->get('/dashboard/products', 'DashboardController@products', ['admin']);