<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('product');
});

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/',[ProductsController::class,'product']);
// Route::get('/',[CategoryController::class,'category']);
Route::get('/bill',[BillController::class,'bill']);
