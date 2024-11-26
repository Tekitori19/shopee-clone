<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Để trống nếu không có mật khẩu
$dbname = 'shopapp';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Lỗi kết nối MySQLi: " . $mysqli->connect_error);
}

return $mysqli;
