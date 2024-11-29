<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ForgetModel
{
    public function sendResetLink($email)
    {
        // Validate email và thực hiện xử lý nếu hợp lệ
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        // Thực hiện gửi email
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your-email@example.com';
            $mail->Password = 'your-email-password';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('your-email@example.com', 'Your App');
            $mail->addAddress($email);
            $mail->Subject = 'Password Reset Link';
            $mail->Body = 'Click here to reset your password: <reset-link>';

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
