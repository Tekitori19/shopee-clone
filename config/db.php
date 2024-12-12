<?php
// return [
//     'host' => 'localhost',
//     'port' => 3306,
//     'dbname' => 'shopapp',
//     'username' => 'root',
//     'password' => ''
// ];

//for docker
return [
    'host' => 'db',  // Thay thế 'localhost' hoặc '127.0.0.1'
    'dbname' => 'shopee',
    'username' => 'user',
    'password' => 'secret',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'port' => 3306
];
