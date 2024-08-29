<?php

namespace App\Controllers;

class AuthenticationController extends BaseController
{
    public function login()
    {
        return view('pages/auth/login');
    }
}
