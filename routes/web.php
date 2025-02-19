<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

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

// Route untuk Autentikasi
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register_admin', function () {
    return view('auth.admin-register');
})->name('register_admin');

Route::get('/register_user', function () {
    return view('auth.register_user');
})->name('register_user');

Route::post('/register/admin', [AuthController::class, 'registerAdmin'])->name('register.admin');
Route::post('/register/user', [AuthController::class, 'registerUser'])->name('register.user');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');