<?php
namespace App\Controllers;

class ErrorController
{
    public function __construct() 
    {
        
    }

    public function index()
    {
        loadView("error/404");
    }
}