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
            'price' => 'required',
            'quantity' => 'required|integer|min:0',

    ]);

    Product::create($request->all());

    return redirect()->route('products.index')->with('success', 'Produit ajoute avec succes.');
}
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produit supprime avec succes.');
    }
    public function edit(Request $request,$id)
    {
        
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product')) ;
    }


}
