<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeminjamanDetailController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\publicController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kategori', KategoriController::class);

Route::resource('buku', BukuController::class);

Route::resource('peminjaman', PeminjamanController::class);

Route::resource('peminjamanDetail', PeminjamanDetailController::class);

Route::resource('penerbit', PenerbitController::class);

Route::resource('penulis', PenulisController::class)->parameters([
    'penulis' => 'penulis'
]);

Route::resource('rak', RakController::class);

Route::get('/dashboard', [publicController::class, 'dashboard'])->name('dashboard');

Route::get('/activity', [publicController::class, 'activity'])->name('activity');

Route::get('/setting', [publicController::class, 'setting'])->name('setting');

Route::get('/book', [publicController::class, 'book'])->name('book');

Route::get('/register', [publicController::class, 'register'])->name('register.form');

Route::get('/login', [publicController::class, 'login'])->name('login');

Route::post('/login', [UsersController::class, 'login'])->name('login');

Route::post('/register', [UsersController::class, 'register'])->name('register');