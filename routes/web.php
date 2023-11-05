<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
})->name('welcome');

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
Route::get('/ahligizi', function () {
    return view('ahliGizi/dashboard');
  })->name('dashboard');

Route::get('/ahligizi/konsultasi', function () {
    return view('ahliGizi/konsultasi');
  })->name('konsultasi');

Route::get('/ahligizi/konsultasi/chat', function () {
    return view('ahliGizi/chatKonsultasi');
  })->name('chatKonsultasi');

Route::get('/ahligizi/konten', function () {
    return view('ahliGizi/konten');
  })->name('Konten');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
