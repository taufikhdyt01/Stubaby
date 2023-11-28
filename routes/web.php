<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AhliGiziController;
use App\Http\Controllers\IrtController;
use App\Http\Controllers\dairyController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\AdminKontenController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\TiketKonsultasiController;
use App\http\Controllers\ArtikelController;
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
    Route::get('/ahligizi/dashboard', [AhliGiziController::class, 'index'])->name('ahliGizi.dashboard');
    Route::get('/irt/dashboard', [IRTController::class, 'dashboard'])->name('irt.dashboard');
});


// admin
Route::middleware(['auth'])->group(function(){
  // edit data anak admin
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::patch('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
   // konten admin
    Route::get('/admin/Admin-Konten/posting', function () {
      return view('admin/addAdminKonten');
    })->name('addAdminKonten');
    Route::get('/admin/Admin-Konten',[AdminKontenController::class, 'index'])->name('Admin-konten.index');
    Route::post('/admin/Admin-Konten/post', [AdminKontenController::class, 'store'])->name('Admin-konten.store');
    Route::get('/admin/Admin-Konten/edit/{id}', [AdminKontenController::class, 'editKonten'])->name('Admin-konten.edit');
    Route::patch('/admin/Admin-Konten/update/{id}', [AdminKontenController::class, 'update_X'])->name('Admin-konten.update');
    Route::delete('/konten/{id}', [AdminKontenController::class, 'deleteKonten'])->name('Admin-konten.delete');
  });

Route::get('/choose', function () {
  return view('auth/choose');
})->name('choose');

Route::resource('articles', 'ArticleController');

// Ahli Gizi
Route::get('/ahligizi/konsultasi', [TiketKonsultasiController::class, 'index'])->name('tiket.index');
Route::get('/ahligizi/konsultasi/chat/{id}', [TiketKonsultasiController::class, 'chatKonsultasi'])->name('tiket.chat');
Route::post('ahligizi/konsultasi/chat/{id}', [TiketKonsultasiController::class, 'kirimPesan'])->name('kirim.pesan');
Route::put('ahligizi/konsultasi/chat/{id}', [TiketKonsultasiController::class, 'update'])->name('tiket.update');
Route::get('/ahligizi/konsultasi/filter', [TiketKonsultasiController::class, 'filteredKonsultasi'])->name('tiket.filter');

Route::get('/ahligizi/konten/post', function () {
  return view('ahliGizi/addKonten');
})->name('addKonten');

Route::get('/ahligizi/konten', [KontenController::class, 'index'])->name('konten.index');
Route::post('/ahligizi/konten/post', [KontenController::class, 'store'])->name('konten.store');
Route::get('/ahligizi/konten/edit/{id}', [KontenController::class, 'editKonten'])->name('konten.edit');
Route::patch('/ahligizi/konten/update/{id}', [KontenController::class, 'update'])->name('konten.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// irt
Route::middleware(['auth'])->group(function () {
  
  Route::get('/irt/artikel', [ArtikelController::class, 'card'])->name('articles');
  Route::get('/irt/diarykecil', [dairyController::class, 'index'])->name('diarykecil.index');
  Route::get('/irt/addDiary', [dairyController::class, 'create'])->name('diarykecil.create');
  Route::post('/irt/addDiary', [dairyController::class, 'store'])->name('diarykecil.store');
  Route::get('/irt/editDiary/{id}', [dairyController::class, 'edit'])->name('irt.editDiary');
  Route::patch('/irt/updateDiary/{id}', [dairyController::class, 'update'])->name('irt.updateDiary');
  Route::get('/irt/bacaartikel/{id}', [ArtikelController::class, 'show'])->name('irt.bacaartikel');
  Route::get('/irt/konsultasi', [TiketKonsultasiController::class, 'index'])->name('irt.konsultasi');
  Route::post('/irt/konsultasi/create', [TiketKonsultasiController::class, 'buatTiket'])->name('tiket.create');
  Route::get('/irt/konsultasi/chat/{id}', [TiketKonsultasiController::class, 'chatKonsultasi'])->name('tiket.chat.irt');
  Route::post('/irt/konsultasi/chat/{id}', [TiketKonsultasiController::class, 'kirimPesan'])->name('kirim.pesan.irt');
});
require __DIR__.'/auth.php';
