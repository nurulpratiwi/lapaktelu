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

Route::get('/auth/login', [AuthController::class, 'showRegister'])->name('showRegister');
Route::prefix("login")->group(function () {
    Route::get('/auth/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/home', [AuthController::class, 'login']);
});


Route::get('/auth/register', [AuthController::class, 'showLogin'])->name('showLogin');
Route::prefix('register')->group(function () {
    Route::get('/auth/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/home', [AuthController::class, 'register']);
}
);

