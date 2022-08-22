<?php

namespace App\Http\Controllers;

class userController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('register');
    }
}
