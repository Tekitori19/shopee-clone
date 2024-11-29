<?php
namespace App\Controllers;

use App\Models\ForgetModel;

class ForgetController
{
    public function showForgetForm()
    {
        // Hiển thị form quên mật khẩu
        require_once '../App/views/authorization/forget.php';
    }

    public function sendResetEmail()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';

            // Gọi model để xử lý email
            $forgetModel = new ForgetModel();
            $success = $forgetModel->sendResetLink($email);

            if ($success) {
                echo "Email reset link sent!";
            } else {
                echo "Failed to send email.";
            }
        }
    }
}
