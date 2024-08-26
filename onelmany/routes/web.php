<?php

use App\Http\Controllers\KlassController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/klass',[KlassController::class, 'index'])->name('klass');
