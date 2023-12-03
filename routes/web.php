<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    return view("auth/register");
});

//route register & login
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');

//route home
Route::prefix('home')->name('home.')->group(function(){
    Route::get('home', [HomeController::class,'index']);
    Route::get('jual', [HomeController::class,'jual']);
    Route::get('login', [HomeController::class,'login']);
    Route::get('detailkategori', [HomeController::class,'detailKategori'])->name('detail');
});