Để gửi email reset mật khẩu bằng PHP, bạn có thể sử dụng thư viện `PHPMailer`. Dưới đây là ví dụ về cách gửi email reset mật khẩu bằng PHP:

### Bước 1: Cài đặt PHPMailer
Trước tiên, bạn cần tải thư viện PHPMailer. Bạn có thể cài đặt thông qua Composer hoặc tải trực tiếp từ GitHub.

- **Cài đặt thông qua Composer**:
  ```bash
  composer require phpmailer/phpmailer
  ```

- **Tải thủ công từ GitHub**: 
  Bạn có thể tải và giải nén thư viện từ [PHPMailer GitHub](https://github.com/PHPMailer/PHPMailer).

### Bước 2: Viết mã gửi email reset mật khẩu
Dưới đây là ví dụ về cách gửi email với một liên kết reset mật khẩu:

```php
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // nếu bạn sử dụng Composer

// Hàm gửi email reset mật khẩu
function sendPasswordResetEmail($userEmail, $resetToken) {
    $mail = new PHPMailer(true); // Tạo đối tượng PHPMailer

    try {
        // Cấu hình server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Dùng SMTP của Google (hoặc server khác)
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // Thay bằng email của bạn
        $mail->Password = 'your_password'; // Thay bằng mật khẩu email của bạn
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Cài đặt người gửi và người nhận
        $mail->setFrom('your_email@gmail.com', 'Your Name');
        $mail->addAddress($userEmail); // Thêm địa chỉ email người nhận

        // Nội dung email
        $mail->isHTML(true);
        $mail->Subject = 'Reset Password Request';
        $mail->Body    = 'Click on the following link to reset your password: <a href="https://yourdomain.com/reset_password.php?token=' . $resetToken . '">Reset Password</a>';
        $mail->AltBody = 'To reset your password, please click on the following link: https://yourdomain.com/reset_password.php?token=' . $resetToken;

        // Gửi email
        $mail->send();
        echo 'Password reset email has been sent.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Ví dụ về cách sử dụng
$userEmail = 'user@example.com'; // Email người dùng
$resetToken = bin2hex(random_bytes(16)); // Tạo token ngẫu nhiên để gửi qua email
sendPasswordResetEmail($userEmail, $resetToken);
?>
```

### Giải thích:
1. **PHPMailer**: Thư viện này giúp bạn dễ dàng gửi email từ PHP thông qua các dịch vụ SMTP như Gmail, SendGrid, v.v.
2. **Mật khẩu reset**: Liên kết email chứa một token reset mật khẩu (`resetToken`). Token này nên được tạo ngẫu nhiên để đảm bảo an toàn.
3. **SMTP**: Đoạn mã sử dụng SMTP của Gmail để gửi email. Bạn có thể thay thế bằng các dịch vụ SMTP khác (như SendGrid hoặc Mailgun) nếu cần.
4. **Cấu hình email**: Thay thế các thông tin như `your_email@gmail.com` và `your_password` với tài khoản email của bạn.

### Bước 3: Xử lý reset mật khẩu
Khi người dùng nhấp vào liên kết trong email, bạn cần tạo một trang PHP (`reset_password.php`) để xử lý token và cho phép người dùng đặt lại mật khẩu mới.

```php
<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    // Kiểm tra token trong cơ sở dữ liệu
    // Nếu token hợp lệ, hiển thị form để người dùng nhập mật khẩu mới
    echo "Enter new password for token: " . htmlspecialchars($token);
} else {
    echo "Invalid token.";
}
?>
```

### Lưu ý:
- Đảm bảo rằng token được lưu trữ và kiểm tra trong cơ sở dữ liệu để bảo vệ tính bảo mật.
- Cấu hình email SMTP chính xác (đặc biệt khi sử dụng Gmail, bạn cần kích hoạt "Less secure apps" hoặc dùng OAuth2 cho bảo mật cao hơn).
