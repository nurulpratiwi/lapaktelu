<?php

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

Route::get('/', function () {
    return view('register');
});

// Route::get('/login', [LoginController::class,'NotHaveAccount'])->name('register');

Route::get('/register', [RegisterController::class,'haveAccount'])->name('login');

Route::get('/login', [LoginController::class,'index'])->name('index');
Route::post('/home', [LoginController::class,'Login'])->name('home');