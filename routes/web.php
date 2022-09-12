<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/edit/{id_user}', [IndexController::class, 'edit'])->name('user.edit');
Route::post('/update/{id_user}', [IndexController::class, 'update'])->name('user.update');
Route::get('/add', [IndexController::class, 'add'])->name('user.add'); //halaman
Route::post('/store', [IndexController::class, 'store'])->name('user.store'); //proses simpan
Route::get('/hapus/{id_user?}', [IndexController::class, 'hapus'])->name('user.hapus'); //proses delete
