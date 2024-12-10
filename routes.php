<?php
$router->get('/', 'HomeController@index');

$router->get('/listings', 'ListingsController@index');
$router->post('/listings', 'ListingsController@store', ['admin']);

$router->get('/listings/search', 'ListingsController@search');
$router->get('/listings/create', 'ListingsController@create', ['admin']);
$router->get('/listings/{id}', 'ListingsController@detail');
$router->get('/listings/edit/{id}', 'ListingsController@edit', ['admin']);
$router->put('/listings/{id}', 'ListingsController@update', ['admin']);
$router->delete('/listings/{id}', 'ListingsController@destroy', ['admin']);

$router->get('/auth/login', 'UserController@login', ['guest']);
$router->post('/auth/login', 'UserController@authenticate', ['guest']);
$router->get('/auth/login-email', 'UserController@login_email', ['guest']);
$router->post('/auth/login-email', 'UserController@authenticate_by_email', ['guest']);
$router->get('/auth/register', 'UserController@register', ['guest']);
$router->post('/auth/register', 'UserController@store', ['guest']);
$router->post('/auth/logout', 'UserController@logout', ['auth']);
$router->get('/auth/forget', 'UserController@forget', ['guest']);
$router->post('/auth/forget', 'UserController@reset', ['guest']);
$router->get('/auth/reset', 'UserController@reset_view', ['guest']);
$router->post('/auth/reset', 'UserController@reset_pass', ['guest']);

$router->get('/checkout', 'CheckoutController@index', ['auth']);
$router->post('/checkout', 'CheckoutController@cart', ['auth']);
$router->delete('/checkout', 'CheckoutController@delete', ['auth']);
$router->post('/checkout/store', 'CheckoutController@store', ['auth']);
$router->get('/checkout/order', 'CheckoutController@order', ['auth']);
$router->get('/checkout/success', 'CheckoutController@success', ['auth']);
$router->post('/checkout/zalo-pay', 'OnlinePaymentController@index', ['auth']);
$router->post('/checkout/zalo-pay/callback', 'OnlinePaymentController@callback', ['auth']);

$router->get('/dashboard/search', 'DashboardController@search', ['admin']);
$router->get('/dashboard', 'DashboardController@order', ['admin']);
$router->get('/dashboard/products', 'DashboardController@products', ['admin']);
$router->get('/dashboard/products/search', 'DashboardController@products_search', ['admin']);
$router->get('/dashboard/{id}', 'DashboardController@detail_order', ['admin']);
$router->delete('/dashboard/{id}', 'DashboardController@destroy_order', ['admin']);
$router->get('/dashboard/edit/{id}', 'DashboardController@edit_order', ['admin']);
$router->put('/dashboard/{id}', 'DashboardController@update_order', ['admin']);

$router->post('/update_info', 'UserController@update_info', ['auth']);
$router->post('/update_cart', 'UserController@update_cart', ['auth']);
