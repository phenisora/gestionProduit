<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class ProductConctroller extends Controller
{
    //
=======
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }


    public function index(){
        return view('products.index');
    }
>>>>>>> develop
}
