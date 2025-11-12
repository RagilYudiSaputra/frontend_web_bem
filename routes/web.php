<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di bawah ini adalah definisi route utama aplikasi.
| Pastikan semua view berada di folder "resources/views".
|
*/

// Redirect root ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Dashboard (bisa diakses tanpa login)
Route::get('/dashboard', function () {
    return view('admindasboard');
})->name('dashboard');

// Route untuk halaman Event publik (tanpa login)
Route::get('/event', function () {
    return view('user.event');
})->name('event');

// Detail Event
Route::get('/event/{id}', function ($id) {
    return view('user.detailevent', ['id' => $id]);
})->name('detailevent');

Route::get('/struktur', function () {
    return view('user.strukturbem');
})->name('struktur');

// ✅ Route dinamis untuk Kementrian
Route::get('/kementrian/{id?}', function ($id = null) {
    return view('user.kementrian', ['id' => $id]);
})->name('kementrian');


// Group route untuk Profile (hanya bisa diakses jika sudah login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/kontak.php';
require __DIR__.'/serviceRoutes.php';
