<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\Http\Requests\StoreLogin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
    public function showLogin(){
        return view("auth.login");
    }
    public function showRegister(){
        return view("auth.register");
    }

    public function forgotPassword(){
        return view("auth.lupa");
    }

    public function login(StoreUser $request){
        $validated = $request->validated();
        if(Auth::attempt($validated->only($validated->email, $validated->password))){
            return redirect('/home');
        }
        return back()->withErrors(['email'=>'Email dan/atau Password Anda salah!']);
    }
    

    public function register(StoreUser $request){
        $validated = $request->validated();
        $user = User::create([
            'username' => $validated['username'],
            'email'=> $validated['email'],
            'password'=> bcrypt($validated['password']),
            
        ]);
        Auth::login($user);
        return redirect('/home');
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
