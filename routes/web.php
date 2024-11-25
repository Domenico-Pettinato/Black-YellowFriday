<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index'])->name('welcome');  
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

