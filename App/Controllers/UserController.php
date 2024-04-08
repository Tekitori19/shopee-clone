<?php
namespace App\Controllers;

use Framework_Tu_Code\Database;
use Framework_Tu_Code\Validation;

class UserController {
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function login() {
        loadView("authorization/login");
    }
    
    public function register()
    {
        loadView("authorization/register");
    }

    public function store()
    {
        $name = $_POST['name'];
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

        $user = $this->db->query("SELECT * FROM users WHERE phone_number = :phone_number", $params)->fetch();

        if ($user) {
            $errors['phone_number'] = 'Số điện thoại đã được đăng kí vui lòng dùng số khác';  
        }

        if (!empty($errors)) {
            loadView("authorization/register", [
                'errors' => $errors,
                'user' => [
                    'name' => $name,
                    'phone' => $phone,
                    'address' => $address
                ]
            ]);
            exit;
        }

        $params = [
            'fullname' => $name,
            'phone_number' => $phone,
            'address' => $address,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ];

        $this->db->query(
            "INSERT INTO users 
                (fullname, phone_number, address, password, role_id)
            VALUES
                (:fullname, :phone_number, :address, :password, 2)
        ", $params
        );

        redirect('/');
    }
}