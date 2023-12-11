<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function Jual(){
        return view("jual");
    }

    public function login(){
        return view("auth/login");
    }

    public function detailKategori(){
        return view("detailkategori");
    }

    
}
