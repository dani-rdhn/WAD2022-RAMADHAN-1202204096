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

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

Route::get('/login', function() {
    return view('product.Login-RAMADHAN');
});

Route::get('/Register-page', function() {
    return view('product.Register-RAMADHAN');
});

Route::get('/Home-page', function() {
    return view('product.Home-RAMADHAN');
});

Route::get('/Home', function() {
    return view('product.index');
});

Route::get('/Listcar', function() {
    return view('product.ListCar-RAMADHAN');
});

Route::get('/Addcar', function() {
    return view('product.Add-RAMADHAN');
});

Route::resource('product', ProductController::class);