<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return 'Esta es la vista del producto';
    }

    public function create(){
    return 'Esta es la vista de crear producto';
    }

    public function store(){
        //
    }

    public function show($product){
        return 'Esta es la vista del producto ' . $product;
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
