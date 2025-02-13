<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);