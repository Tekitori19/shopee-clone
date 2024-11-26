<?php

namespace App\Controllers;

use Framework_Tu_Code\Session;
use Framework_Tu_Code\Validation;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class UserController
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function login()
    {
        loadView("authorization/login");
    }

    public function login_email()
    {
        loadView("authorization/login-email");
    }

    public function register()
    {
        loadView("authorization/register");
    }

    public function forget()
    {
        loadView("authorization/forget");
    }

    // public function reset()
    // {
    //     // Ví dụ về cách sử dụng
    //     $userEmail = 'user@example.com'; // Email người dùng
    //     $resetToken = bin2hex(random_bytes(16)); // Tạo token ngẫu nhiên để gửi qua email
    //     $this->sendPasswordResetEmail($userEmail, $resetToken);
    //     // loadView("authorization/forget");
    // }
    //
    // function sendPasswordResetEmail($userEmail, $resetToken)
    // {
    //     $mail = new PHPMailer(true); // Tạo đối tượng PHPMailer
    //
    //     try {
    //         // Cấu hình server SMTP
    //         $mail->isSMTP();
    //         $mail->Host = 'smtp.gmail.com'; // Dùng SMTP của Google (hoặc server khác)
    //         $mail->SMTPAuth = true;
    //         $mail->Username = 'your_email@gmail.com'; // Thay bằng email của bạn
    //         $mail->Password = 'your_password'; // Thay bằng mật khẩu email của bạn
    //         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //         $mail->Port = 587;
    //
    //         // Cài đặt người gửi và người nhận
    //         $mail->setFrom('your_email@gmail.com', 'Your Name');
    //         $mail->addAddress($userEmail); // Thêm địa chỉ email người nhận
    //
    //         // Nội dung email
    //         $mail->isHTML(true);
    //         $mail->Subject = 'Reset Password Request';
    //         $mail->Body    = 'Click on the following link to reset your password: <a href="https://yourdomain.com/reset_password.php?token=' . $resetToken . '">Reset Password</a>';
    //         $mail->AltBody = 'To reset your password, please click on the following link: https://yourdomain.com/reset_password.php?token=' . $resetToken;
    //
    //         // Gửi email
    //         $mail->send();
    //         echo 'Password reset email has been sent.';
    //     } catch (Exception $e) {
    //         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //     }
    // }
    //

    // public function sendResetLink()
    // {
    //     $email = $_POST['email'];
    //     $userModel = new UserModel();
    //     $user = $userModel->getUserByEmail($email);
    //
    //     if ($user) {
    //         $token = bin2hex(random_bytes(50));
    //         $userModel->storeToken($user['id'], $token);
    //
    //         $resetLink = "http://yourdomain.com/reset-password?token=" . $token;
    //         $subject = "Password Reset Request";
    //         $message = "Click the following link to reset your password: " . $resetLink;
    //
    //         $emailLib = new Email();
    //         $emailLib->send($email, $subject, $message);
    //
    //         echo "A password reset link has been sent to your email.";
    //     } else {
    //         echo "Email address not found.";
    //     }
    // }
    //
    // public function resetPassword()
    // {
    //     $token = $_GET['token'];
    //     $userModel = new UserModel();
    //     $user = $userModel->getUserByToken($token);
    //
    //     if ($user) {
    //         loadView("authorization/reset_password", ['token' => $token]);
    //     } else {
    //         echo "Invalid token.";
    //     }
    // }
    //
    // public function updatePassword()
    // {
    //     $token = $_POST['token'];
    //     $password = $_POST['password'];
    //     $userModel = new UserModel();
    //     $user = $userModel->getUserByToken($token);
    //
    //     if ($user) {
    //         $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    //         $userModel->updatePassword($user['id'], $hashedPassword);
    //         $userModel->deleteToken($token);
    //
    //         echo "Your password has been successfully updated.";
    //     } else {
    //         echo "Invalid token.";
    //     }
    // }

    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        $errors = [];

        if (!Validation::string($name, 2, 50)) {
            $errors['name'] = 'Tên phải từ 2 kí tự đến 50 kí tự';
        }

        if (!Validation::string($phone, 10, 10)) {
            $errors['phone'] = 'Vui lòng nhập số điện thoại';
        }

        if (!Validation::string($address, 6, 200)) {
            $errors['password'] = 'Vui lòng nhập địa chỉ tối thiểu 6 kí tự (nhiều nhất 200 kí tự)';
        }

        if (!Validation::string($password, 6, 50)) {
            $errors['password'] = 'Mật khẩu phải từ 6 kí tự đến 50 kí tự';
        }

        if (!Validation::match($password, $password_confirmation)) {
            $errors['password_confirmation'] = 'Mật khẩu không trùng';
        }

        $params = [
            'phone_number' => $phone
        ];

        $user = $this->model->selectByPhoneNumber($params);

        if ($user) {
            $errors['phone_number'] = 'Số điện thoại đã được đăng kí vui lòng dùng số khác';
        }

        $params = [
            'email' => $email
        ];

        $user = $this->model->selectByEmail($params);

        if ($user) {
            $errors['email'] = 'email đã được đăng kí vui lòng dùng email khác';
        }

        if (!empty($errors)) {
            loadView("authorization/register", [
                'errors' => $errors,
                'user' => [
                    'name' => $name,
                    'phone' => $phone,
                    'address' => $address,
                    'email' => $email,
                ]
            ]);
            exit;
        }

        $params = [
            'fullname' => $name,
            'phone_number' => $phone,
            'address' => $address,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ];

        $this->model->insert($params);

        //Get new insert user ID
        $userId = $this->model->getNewInsertedUserID();
        $role = $this->model->selectByID($userId);

        Session::set('user', [
            'id' => $userId,
            'fullname' => $name,
            'phone_number' => $phone,
            'address' => $address,
            'role' => $role
        ]);

        redirect('/');
    }

    public function logout()
    {
        Session::clearAll();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);

        redirect('/');
    }

    public function authenticate()
    {
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $errors = [];

        // Validation
        if (!Validation::string($phone, 10, 10)) {
            $errors['phone'] = 'Vui lòng nhập đúng thông tin';
        }

        if (!Validation::string($password, 6, 50)) {
            $errors['password'] = 'Mật khẩu có ít nhất 6 kí tự';
        }

        if (!empty($errors)) {
            loadView('authorization/login', [
                'errors' => $errors
            ]);
            exit;
        }

        $params = [
            'phone_number' => $phone
        ];

        $user = $this->model->selectByPhoneNumber($params);

        // print_r($user);

        if (!$user) {
            $errors['phone'] = 'Thông tin sai';
            loadView('authorization/login', [
                'errors' => $errors,
                'user' => [
                    'phone' => $params['phone_number'],
                ]
            ]);
            exit;
        }

        // Check if password is correct
        if (!password_verify($password, $user->password)) {
            $errors['phone'] = 'Thông tin sai';
            loadView('authorization/login', [
                'errors' => $errors,
                'user' => [
                    'phone' => $params['phone_number'],
                ]
            ]);
            exit;
        }

        // Set user session
        Session::set('user', [
            'id' => $user->id,
            'fullname' => $user->fullname,
            'phone_number' => $user->phone_number,
            'email' => $user->email,
            'address' => $user->address,
            'role' => $user->role_id
        ]);

        redirect('/');
    }


    public function authenticate_by_email()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        // // Validation
        // if (!Validation::string($phone, 10, 10)) {
        //     $errors['phone'] = 'Vui lòng nhập đúng thông tin';
        // }

        if (!Validation::string($password, 6, 50)) {
            $errors['password'] = 'Mật khẩu có ít nhất 6 kí tự';
        }

        if (!empty($errors)) {
            loadView('authorization/login-email', [
                'errors' => $errors
            ]);
            exit;
        }

        $params = [
            'email' => $email
        ];

        $user = $this->model->selectByEmail($params);

        // print_r($user);

        if (!$user) {
            $errors['email'] = 'Thông tin sai';
            loadView('authorization/login-email', [
                'errors' => $errors,
                'user' => [
                    'email' => $email,

                ]
            ]);
            exit;
        }

        // Check if password is correct
        if (!password_verify($password, $user->password)) {
            $errors['email'] = 'Thông tin sai';
            loadView('authorization/login-email', [
                'errors' => $errors,
                'user' => [
                    'email' => $email,

                ]
            ]);
            exit;
        }

        // Set user session
        Session::set('user', [
            'id' => $user->id,
            'fullname' => $user->fullname,
            'phone_number' => $user->phone_number,
            'email' => $user->email,
            'address' => $user->address,
            'role' => $user->role_id
        ]);

        Session::set('cart', []);

        redirect('/');
    }

    public function update_info()
    {
        // [id] => 18
        // [phone_number] => 0111111111
        // [fullname] => admin
        // [email] => corclan19@gmail.com
        // [address] => đà nẵng        
        $id = $_POST['id'];
        $phone_number = $_POST['phone_number'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $params = [
            'id' => $id,
            'phone_number' => $phone_number,
            'fullname' => $fullname,
            'email' => $email,
            'address' => $address
        ];

        $this->model->updateUser($params);
        redirect('/checkout');
        // inspectAndDie($_POST);
    }

    public function update_cart()
    {
        $_SESSION['cart'][$_POST['key']]['quantity'] = intval($_POST['quantity']);
        redirect('/checkout');
    }
}
