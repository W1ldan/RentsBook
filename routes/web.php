<?php

use App\Http\Controllers\MessegeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route FE
Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/user', function () {
    return view('dashboard.user');
});

Route::get('/books', function () {
    return view('dashboard.book');
});

Route::get('/category', function () {
    return view('dashboard.category');
});

Route::get('/rents-logs', function () {
    return view('dashboard.rents-logs');
});



Route::post('/storeMessege', [MessegeController::class,'messege'])->name('messege');

Route::get('/login' , [RegisterController::class, 'indexLogin'])->name('indexLogin');
Route::post('/login/auth', [AuthController::class,'auth'])->name('auth');

Route::post('/register/input', [RegisterController::class,'register'])->name('storeRegister');
Route::get('/register', [RegisterController::class,'index'])->name('register');   