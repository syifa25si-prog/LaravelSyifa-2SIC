<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('halaman-about');
});


// Route khusus untuk show dengan parameter opsional
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// Route resource untuk sisanya (index, create, store, edit, update, destroy)
Route::resource('matakuliah', MatakuliahController::class);

Route::get('/home', [HomeController::class, 'index']);