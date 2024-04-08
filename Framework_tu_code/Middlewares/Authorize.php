<?php

namespace Framework_Tu_Code\Middlewares;
use Framework_Tu_Code\Session;

class Authorize{

    public function isAuthenticated() {
        return Session::has('user');
    }

    public function isAdmin() {
        return $this->isAuthenticated() && Session::get('user')['role'] === 1;
    }

    public function handle($role) {
        if ($role === 'guest' && $this->isAuthenticated()) {
            redirect('/');
        } elseif ($role === 'auth' && !$this->isAuthenticated()) {
            redirect('/auth/login');
        } 
        elseif ($role === 'admin' && !$this->isAdmin()) {
            redirect('/auth/login');
        }
    }
}