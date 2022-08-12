<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/{id}', [BarangController::class, 'show'])->name('barang');
