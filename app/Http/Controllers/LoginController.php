<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('/auth/login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);
       
        if(Auth::check()){
            return redirect('home');
        }
        return redirect(route('login'))->with("error", "Email dan/atau Password Anda salah!");
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
