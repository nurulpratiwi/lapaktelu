<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view("auth.login");
    }

    public function login(Request $request){
        $this->validate($request,[
            "email"=> "required|email",
            "password"=> "required|min:6|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$",
        ]);

        if(Auth::attempt(["email"=> $request->email,"password"=> $request->password])){
           return redirect("views.home")->with("success","Login Berhasil!");
        }else{
            return redirect("auth.login")->with("error","Email dan/atau Username Anda salah!");
        }
    }

    public function showRegister(){
        return view("auth.register");
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
    }
}
