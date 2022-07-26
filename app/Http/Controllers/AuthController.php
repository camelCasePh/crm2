<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function registration()
    {
        return view('auth.registration');
    } //registration()

    public function login()
    {
        return view('auth.login');
    } //login()
}
