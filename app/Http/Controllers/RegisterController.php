<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required|string|min:6',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);
        
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error", "Pendaftaran gagal, coba lagi!");
        }
        return redirect(route('login'))->with("success", "Berhasil Registrasi!, Login untuk mengakses web!");
    }

  
}
