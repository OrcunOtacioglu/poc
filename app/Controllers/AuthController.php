<?php

namespace App\Controllers;

use BetterProposals\Http\BaseController;

class AuthController extends BaseController
{
    public function showLogin()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
    
    public function showRegister()
    {
        $this->setLayout('auth');
        return $this->render('register');
    }
    
    public function login($request)
    {
        
    }
    
    public function register($request)
    {
        
    }
}