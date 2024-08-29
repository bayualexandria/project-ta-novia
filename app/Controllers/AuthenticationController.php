<?php

namespace App\Controllers;

class AuthenticationController extends BaseController
{
    public function index()
    {
        return view('pages/auth/login');
    }

    public function login()
    {
        echo "Hello";
    }
}
