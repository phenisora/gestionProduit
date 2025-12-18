<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});



//Route pour la page d'acceuil 
Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');

//Route pour le client

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [EtudiantController::class, 'store'])->name('products.store');
