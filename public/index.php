<?php
require __DIR__ . '/../vendor/autoload.php';
require_once "../helpers.php";
echo __DIR__ . '/../vendor/autoload.php';

/// Cach 1: Dung require => Nhuoc diem de bi loi
//      require_once basePath("Framework_tu_code/Router.php");
//      require_once basePath("Framework_tu_code/Database.php");

/// Cach 2: Dung tu dong load cua PHP => k toi uu cho codebase lon
// spl_autoload_register(function ($class) {
//   $path = basePath('Framework_tu_code/' . $class . '.php');
//   if (file_exists($path)) {
//     require $path;
//   }  
// });

/// Cach 3: Sử dụng thư viện để đặt tên cho cái folder để dễ dàng import (giống golang)
use Framework_Tu_Code\Router;
use Framework_Tu_Code\Database;


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