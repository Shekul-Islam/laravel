<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('home');
});

Route::post('/register', [Usercontroller::class, 'register']);
Route::post('/logout',[Usercontroller::class, 'logout']);
Route::post('/login',[Usercontroller::class, 'login']);

//blog post related routes
Route::post('/create-post', [PostController::class,'createPost']);

