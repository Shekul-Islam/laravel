<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(Request $request){
    return view("Welcome to laravel");
});

Route::get('/name', function () {
    return "shekul";
});
