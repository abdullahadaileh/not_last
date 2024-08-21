<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Routes Categories
Route::resource('categories', CategoryController::class);

// Routes Products
Route::resource('products', ProductController::class);
