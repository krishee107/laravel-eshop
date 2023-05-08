<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        //dd($products); --> Para ver los datos que se estan pasando a la vista

        return view('products.index')->with('products', $products);
    }

    public function create(){
    return 'Esta es la vista de crear producto';
    }

    public function store(){
        //
    }

    public function show($product){
       // $product = Product::find($product);
       //dd($product);
       $product = Product::findOrFail($product);
        return view('products.show')->with('product', $product);
    }

    public function edit($product){
        return 'Formulario para editar el producto ' . $product;
    }

    public function update(){
        //
    }

    public function destroy($product){
        //
    }
}
