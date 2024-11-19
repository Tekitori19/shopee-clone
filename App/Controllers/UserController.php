<?php

namespace App\Controllers;

use Framework_Tu_Code\Session;
use Framework_Tu_Code\Validation;
use App\Models\User;

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

        $user = $this->model->selectByPhoneNumber($params);

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
            'phone' => $phone
        ];

        $user = $this->model->selectByPhoneNumber($params);

        // print_r($user);

        if (!$user) {
            $errors['phone'] = 'Thông tin sai';
            loadView('authorization/login', [
                'errors' => $errors
            ]);
            exit;
        }

        // Check if password is correct
        if (!password_verify($password, $user->password)) {
            $errors['phone'] = 'Thông tin sai';
            loadView('authorization/login', [
                'errors' => $errors
            ]);
            exit;
        }

        // Set user session
        Session::set('user', [
            'id' => $user->id,
            'fullname' => $user->fullname,
            'phone_number' => $user->phone_number,
            'address' => $user->address,
            'role' => $user->role_id
        ]);

        redirect('/');
    }
}
