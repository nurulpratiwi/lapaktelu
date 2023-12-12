<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\jualController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//route home
Route::prefix('home')->name('home.')->group(function(){
    Route::get('home', [HomeController::class,'index']);
    //Route::get('jual', [HomeController::class,'jual'])->name('jual');
    //Route::get('login', [HomeController::class,'login'])->name('login');
    Route::get('detailkategori', [HomeController::class,'detailKategori'])->name('detail');
}); 
Route::get('/', function () {
    return view("home");
});

//route home
Route::get('/home', function () {
    return view('home');
});

//route jual
Route::get('/jual', function () {
    return view('jual');
});


//route jual
Route::post('/store', [jualController::class, 'store']);
Route::get('/jual', [jualController::class, 'index'])->name('jual');