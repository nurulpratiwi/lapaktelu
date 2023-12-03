<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required|string|min:6',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|min:6|string|regex:regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);
        

    }
}
