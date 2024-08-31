<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/customer.addcustomer', function () {
    return view('admin-pages.customer.addcustomer');
});
Route::get('/customer.customerlist', function(){
    return view('admin-pages.customer.customerlist');
});
Route::get('/customer.customerledger', function(){
    return view('admin-pages.customer.customerledger');
});

// Route::get('/admin/customer/add', function () {
//     return view('admin.customer.addcustomer');
// })->name('admin.customer.add');


