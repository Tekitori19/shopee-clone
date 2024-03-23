<?php
namespace App\Controllers;

class LoginController
{
    public function __construct()
    {

    }

    public function index()
    {
        loadView("authorization/login");
    }
}