<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view("auth.register");
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

