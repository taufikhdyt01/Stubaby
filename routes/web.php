<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AhliGiziController;
use App\Http\Controllers\IrtController;
use App\Http\Controllers\KontenController;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/ahliGizi/dashboard', [AhliGiziController::class, 'dashboard'])->name('ahliGizi.dashboard');
    Route::get('/irt/dashboard', [IRTController::class, 'dashboard'])->name('irt.dashboard');
});


Route::get('/Admin-Konten',function () {
    return view('admin/Admin-Konten');
});

Route::get('/Admin-Konsultasi',function () {
    return view('admin/Admin-Konsultasi');
});

Route::get('/Daftar',function () {
    return view('register');
});

Route::get('/Masuk',function () {
    return view('login');
});

// Ahli Gizi


Route::get('/ahligizi/konsultasi', function () {
    return view('ahliGizi/konsultasi');
  })->name('konsultasi');

Route::get('/ahligizi/konsultasi/chat', function () {
    return view('ahliGizi/chatKonsultasi');
  })->name('chatKonsultasi');

Route::get('/ahligizi/konten', function () {
    return view('ahliGizi/konten');
  })->name('konten');


Route::get('/ahligizi/konten/posting', function () {
    return view('ahliGizi/addKonten');
  })->name('addKonten');

  Route::get('/ahligizi/konten/show', function () {
    return view('ahliGizi/showKonten');
  })->name('showKonten');

  Route::get('/konten/{id}', [KontenController::class, 'show'])->name('konten.show');



Route::get('/ahligizi/konten', [KontenController::class, 'index'])->name('konten.index');
Route::post('/konten', [KontenController::class, 'store'])->name('konten.store');
Route::get('/ahligizi/konten/{id}', [KontenController::class, 'show'])->name('konten.show');

Route::get('/dashboard', function () {
    return view('irt.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';