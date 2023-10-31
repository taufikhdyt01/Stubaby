<?php

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
    return view('landing');
});

Route::get('/Admin',function () {
    return view('Admin');
});


Route::get('/Admin-Konten',function () {
    return view('Admin-Konten');
});

Route::get('/Admin-Konsultasi',function () {
    return view('Admin-Konsultasi');
});

Route::get('/Admin', 'App\Http\Controllers\AdminController@index');

Route::get('/Daftar',function () {
    return view('register');
});

Route::get('/Masuk',function () {
    return view('login');
});

// Ahli Gizi
Route::get('/ahligizi/dashboard', function () {
    return view('ahliGizi/dashboard');
  })->name('dashboard');

