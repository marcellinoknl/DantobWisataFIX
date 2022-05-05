<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    public function login(){
        return view('Auth.login1');
    }

    public function register(){
        return view('Auth.register1');
    }

    public function forgotpassword(){
        return view('Auth.forgotpassword');
    }
}
