<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;





class ProductController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
{
    $products = Product::all();
    return view('products.index', compact('products'));
}

public function create()
{
    return view('products.create');
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required|float',
        'quantity' => 'required|integer|min:0',

    ]);

    Product::create($request->all());

    return redirect()->route('products.index')->with('success', 'Produit ajoute avec succes.');
}



}
