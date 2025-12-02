<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('Kategori', [HomeController::class, 'kategori'])->name('kategori');
Route::get('Supplier', [HomeController::class, 'supplier'])->name('supplier');

