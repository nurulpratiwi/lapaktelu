<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route
Route::get('/', function () {
    return view("home");
});

//route register
Route::prefix("register")->name('register.')->group(function () {
    Route::get('register.login', [AuthController::class,'showLogin'])->name('showLogin');
    Route::get('register', [AuthController::class,'indexRegister'])->name('register');
    Route::post('register.daftar', [AuthController::class, 'store'])->name('daftar');
});

//route login
Route::prefix('login')->name('login.')->group(function () {
    Route::get('login.showRegister', [AuthController::class,'showRegister'])->name('showRegister');
    Route::get('login.forgot', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
});

//route home
Route::prefix('home')->name('home.')->group(function(){
    Route::get('home', [HomeController::class,'index']);
    Route::get('jual', [HomeController::class,'jual']);
    Route::get('login', [HomeController::class,'login']);
    Route::get('detailkategori', [HomeController::class,'detailKategori'])->name('detail');
});