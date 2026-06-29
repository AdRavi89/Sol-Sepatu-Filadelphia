<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

// 1. Halaman Utama (Beranda)
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Halaman Kumpulan Semua Artikel (Ini yang menyebabkan error tadi)
Route::get('/artikel', [ArticleController::class, 'index'])->name('article.index');

// 3. Halaman Baca 1 Artikel (Harus diletakkan di bawah agar tidak menabrak rute di atasnya)
Route::get('/artikel/{slug}', [HomeController::class, 'show'])->name('article.show');