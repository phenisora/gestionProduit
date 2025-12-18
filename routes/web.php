<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard',[ProductController::class,'dashboard'])->name('dashboard');



Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::delete('/products/{id}',[ProductController::class,'delete'])->name('products.delete');
Route::get('/products/edit',[ProductController::class,'edit'])->name('products.edit');

//Route pour la page d'acceuil
Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');








