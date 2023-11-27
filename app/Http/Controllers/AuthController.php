<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexRegister(){
        return view("auth/register");
    }

    public function indexLogin(){
        return view("auth/login");
    }
    public function showLogin(){
        return view("auth/login");
    }
    public function showRegister(){
        return view("auth/register");
    }

    public function forgotPassword(){
        return view("auth/lupa");
    }

    public function store(Request $request){
        $this->validate($request,[
            "username"=>["required","string","min:6"],
            "email"=> "required | string | max:255 | email | unique:users",
            "password"=> "required | min:6 | string | regex:regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/"
        ],[
          "username.required"=> "Username harus memiliki minimal 6 karakter",
          "email.required"=> "Email harus diisi",
          "password.required"=> "Password harus mengandung 6 karakter terdiri dari huruf besar, kecil dan simbol"
        ]);

        User::create([$request->all()]);
        return redirect("welcome")->with("success","Selamat, Data Anda berhasil disimpan");
    }
    
    // public function login(Request $request){
    //     $this->validate($request,[
    //         "email"=> "required|email",
    //         "password"=> "required|min:6|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$",
    //     ]);

    //     if(Auth::attempt(["email"=> $request->email,"password"=> $request->password])){
    //        return redirect("views.home")->with("success","Login Berhasil!");
    //     }else{
    //         return redirect("auth.login")->with("error","Email dan/atau Username Anda salah!");
    //     }
    // }


    // public function register(Request $request){
    //     $request->validate([
    //         'username' => 'required|min:6',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
    //     ]);

    //     User::create([
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //     ]);

    //     return redirect('/dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
    // }
}
