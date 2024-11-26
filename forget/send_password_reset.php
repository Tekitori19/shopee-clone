<?php
$email = $_POST['email'];

$token = bin2hex(random_bytes(16));

$token_hash =  hash('sha256', $token);
$expiry = date('Y-m-d H:i:s' ,time() + 60  * 30);

$mysqli = require __DIR__ . "/database.php";
if (!$mysqli instanceof mysqli) {
    die("Lỗi: Kết nối MySQLi không hợp lệ.");
}

$sql = "UPDATE users SET reset_token_hash = ?, reset_token_expores_at= ? WHERE email = ?
";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash,$expiry, $email);

$stmt->execute();
if($mysqli->affected_rows) {
   $mail = require __DIR__ . "/mailer.php";
   $mail->setFrom('phamvanmien2001@gmail.com', 'Your App Name');
   $mail->addAddress($email);
   $mail->Subject = "Reset Password";
   $mail->Body = <<< END

   Click <a href="http://localhost/shopee-clone/forget/reset-password.php?token=$token">here</a>
   to reset your password.
   END;
  try{
    $mail->send();
    echo "Link đặt lại mật khẩu đã được gửi đến email của bạn.";
  }
  catch(Exception $e){
    echo "Lỗi: ". $mail->ErrorInfo;
  }
}
echo "messages sent , please you inbox";
