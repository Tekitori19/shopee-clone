<?php
$token = $_POST['token'];
$token_hash = hash('sha256', $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM users WHERE reset_token_hash = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $token_hash);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("Không tìm thấy token.");
}


if (strtotime($user['reset_token_expores_at']) <= time()) {
    die("Token đã hết hạn.");
}


$new_password = isset($_POST['new_password']) ? trim($_POST['new_password']) : null;
$confirm_password = isset($_POST['confirm_password']) ? trim($_POST['confirm_password']) : null;


if (is_null($new_password) || is_null($confirm_password)) {
    die("Các trường mật khẩu không được để trống.");
}
if ($new_password !== $confirm_password) {
    die("Mật khẩu không khớp.");
}
if (strlen($new_password) < 6) {
    die("Mật khẩu phải có ít nhất 6 ký tự.");
}


$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);


$sql = "UPDATE users SET 
    password = ?, 
    reset_token_hash = NULL, 
    reset_token_expores_at = NULL 
    WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("si", $hashed_password, $user['id']);
$stmt->execute();


if ($stmt->affected_rows > 0) {
    echo "Mật khẩu đã được cập nhật thành công.";
} else {
    echo "Không thể cập nhật mật khẩu.";
}
?>
