<?php
require_once "../helpers.php";

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

require_once basePath("Router.php");

//Init router
$router = new Router();

// Get routes
require_once basePath('routes.php');
// inspect($router);

$router->route($uri, $method);