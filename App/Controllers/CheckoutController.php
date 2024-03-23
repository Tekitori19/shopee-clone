<?php
namespace App\Controllers;

class CheckoutController
{
    public function __construct() 
    {
        
    }

    public function index()
    {
        loadView("checkout/index");
    }
}