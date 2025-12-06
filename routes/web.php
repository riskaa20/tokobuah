<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/buah', [HomeController::class, 'buah']);
Route::post('/buah/store', [HomeController::class, 'buah_store']);
Route::get('/buah/delete/{id}', [HomeController::class, 'buah_delete']);

Route::get('/kategori', [HomeController::class, 'kategori']);
Route::post('/kategori/store', [HomeController::class, 'kategori_store']);
Route::get('/kategori/delete/{id}', [HomeController::class, 'kategori_delete']);

Route::get('/supplier', [HomeController::class, 'supplier']);
Route::post('/supplier/store', [HomeController::class, 'supplier_store']);
Route::get('/supplier/delete/{id}', [HomeController::class, 'supplier_delete']);
