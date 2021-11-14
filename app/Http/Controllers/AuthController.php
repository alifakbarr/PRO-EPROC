<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth/masuk');
    }

    public function registrasi(){
        return view('auth/register');
    }

    public function forget(){
        return view('auth/forgetpw');
    }
}
