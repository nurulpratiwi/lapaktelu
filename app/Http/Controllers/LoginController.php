<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('/auth/login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|min:6|string|regex:regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);
    }
}
