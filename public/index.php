<?php
require_once "../helpers.php";
require_once basePath("Router.php");
require_once basePath("Database.php");

$config = require_once basePath('config/db.php');
$db = new Database($config);


//Init router
$router = new Router();

// Get routes
require_once basePath('routes.php');

// GET current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // parse_url to delete behind "?"
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);