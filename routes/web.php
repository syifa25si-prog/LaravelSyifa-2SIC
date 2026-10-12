<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

// Route untuk memproses pengiriman form
Route::post('question/store', [QuestionController::class, 'store'])
        ->name('question.store');

// Route baru untuk menampilkan halaman respon setelah redirect
Route::get('question/respon', [QuestionController::class, 'respon'])
        ->name('question.respon');

Route::get('/home-question-respon', function () {
    return view('home-question-respon');
})->name('home-question-respon');

// Route untuk halaman Dashboard Admin
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');