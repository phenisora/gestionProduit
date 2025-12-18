<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductConctroller;

Route::get('/', function () {
    return view('welcome');
});

// Pour less etudiants
Route::get('products', [ProductConctroller::class,'index'])->name('products.index');
Route::get('/products/create', [ProductConctroller::class,'create'])->name('products.create');
Route::post('/products/store',[ProductConctroller::class,'store'])->name('products.store');



