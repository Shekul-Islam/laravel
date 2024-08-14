<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['products'=>Product::all()]);
})->name('home');

// Route::get('/insert', function () {
//     return view('insert');
// });

Route::get('/insert',[ProductController::class, 'method']);
Route::post('/store',[ProductController::class, 'filestore'])->name('store');