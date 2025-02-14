<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Halaman Utama
Route::get('/', function () {
    return redirect()->route('products.index');
})->name('home');

// Route untuk Produk (Menggunakan Route Resource)
Route::resource('products', ProductController::class)->except(['show']);

// Route untuk Kategori (Menggunakan Route Resource)
Route::resource('categories', CategoryController::class)->except(['show']);

// Route tambahan untuk menampilkan detail produk (jika diperlukan)
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Route tambahan untuk menampilkan detail kategori (jika diperlukan)
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');