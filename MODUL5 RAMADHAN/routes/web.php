<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
    return view('product.index');
});

// Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

Route::get('/login', function() {
    return view('product.Login-RAMADHAN');
});

Route::get('/Register-page', function() {
    return view('product.Register-RAMADHAN');
});

Route::get('/Home-page', function() {
    return view('product.Home-RAMADHAN');
});

Route::get('/Homes', function() {
    return view('product.index');
});

Route::get('/Listcar', function() {
    return view('product.ListCar-RAMADHAN');
});

Route::get('/Addcar', function() {
    return view('product.Add-RAMADHAN');
}); 

Route::get('/Detailcar', function() {
    return view('product.Detail-RAMADHAN');
}); 

Route::get('/Update', function() {
    return view('product.Edit-RAMADHAN');
}); 

Route::get('/product/{id}/edit', function() {
    return view('product.Edit-RAMADHAN');
}); 

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::resource('product', ProductController::class);
Route::resource('/Listcar', ProductController::class);
Route::resource('/product/{id}', ProductController::class);
Route::resource('/product/{id}/edit', ProductController::class);
Route::resource('/Update', ProductController::class);
Route::resource('/Detailcar', ProductController::class);