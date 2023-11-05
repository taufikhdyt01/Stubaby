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

Route::get('/Daftar',function () {
    return view('register');
});

Route::get('/Masuk',function () {
    return view('login');
});

// Ahli Gizi
Route::get('/ahligizi', function () {
    return view('ahliGizi/dashboard');
  })->name('dashboard');

  Route::get('/ahligizi/konsultasi', function () {
    return view('ahliGizi/konsultasi');
  })->name('konsultasi');

  Route::get('/ahligizi/konsultasi/chat', function () {
    return view('ahliGizi/chatKonsultasi');
  })->name('chatKonsultasi');