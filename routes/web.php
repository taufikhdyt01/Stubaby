<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AhliGiziController;
use App\Http\Controllers\IrtController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\AnakController;
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
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/chat/user/{user}', [App\Http\Controllers\ChatController::class, 'chat'])->name('chat');
    Route::get('/chat/room/{room}', [App\Http\Controllers\ChatController::class, 'room'])->name('chat.room');
    Route::get('/chat/get/{room}', [App\Http\Controllers\ChatController::class, 'getChat'])->name('chat.get');
    Route::post('/chat/send', [App\Http\Controllers\ChatController::class, 'sendChat'])->name('chat.send');
});


// admin
Route::middleware(['auth'])->group(function(){
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('/Admin-Konten',function () {return view('admin/Admin-Konten');});
    Route::get('/Admin-Konsultasi',function () {return view('admin/Admin-Konsultasi');});
});

Route::get('/choose', function () {
  return view('auth/choose');
})->name('choose');

Route::resource('articles', 'ArticleController');

// Ahli Gizi
Route::middleware(['auth'])->group(function () {
Route::get('/ahligizi/konsultasi',[App\Http\Controllers\HomeController::class, 'home'], function () { return view('ahliGizi/konsultasi');})->name('konsultasi');
});
Route::get('/ahligizi/konsultasi/chat', function () {
    return view('ahliGizi/chatKonsultasi');
  })->name('chatKonsultasi');

Route::get('/ahligizi/konten', function () {
    return view('ahliGizi/konten');
  })->name('konten');


Route::get('/ahligizi/konten/posting', function () {
    return view('ahliGizi/addKonten');
  })->name('addKonten');

Route::get('/ahligizi/konten/edit', function () {
    return view('ahliGizi/editKonten');
  })->name('editKonten');

Route::get('/ahligizi/konten', [KontenController::class, 'index'])->name('konten.index');
Route::post('/konten', [KontenController::class, 'store'])->name('konten.store');
Route::get('/ahligizi/konten/edit/{id}', [KontenController::class, 'editKonten'])->name('konten.edit');
Route::patch('/ahligizi/konten/update/{id}', [KontenController::class, 'update'])->name('konten.update');


Route::get('/dashboard', function () {
    return view('irt.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';