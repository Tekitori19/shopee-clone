<?php
namespace App\Controllers;

class RegisterController
{
    public function __construct() 
    {
        
    }

    public function index()
    {
        loadView("authorization/register");
    }
}