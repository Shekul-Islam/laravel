<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/customer.addcustomer', function () {
    return view('admin-pages.customer.addcustomer');
});

// Route::get('/admin/customer/add', function () {
//     return view('admin.customer.addcustomer');
// })->name('admin.customer.add');
