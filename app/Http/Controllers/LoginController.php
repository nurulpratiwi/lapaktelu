<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function notHaveAccount(){
        return view("register");
    }
    public function index(){
        return view("login");
    }
    public function Login(Request $request){
        $request->validate([   
            "email"=> "required",
            "password"=> "required"
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required'=> 'Password wajib diisi'
        ]);

        $infologin =[
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            // jika otentikasi sukses
            return "Berhasil Login";
        } else {
            // jika otentikasi gagal
            return redirect("/login")->with("error","Email atau Password salah. Coba Lagi!");
        }
        
    }
}
