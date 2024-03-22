<?php
require_once "../helpers.php";
require_once basePath("Database.php");

$config = require_once basePath('config/db.php');
$db = new Database($config);

require_once basePath("Router.php");

//Init router
$router = new Router();

// Get routes
require_once basePath('routes.php');
// inspect($router);

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);