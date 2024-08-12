<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bill');
});

Route::get('/',[CategoryController::class,'category']);
Route::get('/bill',[BillController::class,'category']);