<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('products', function () {
    return 'Esta es la vista del producto';
})->name('products.index');

Route::get('products/create', function () {
    return 'Esta es la vista de crear producto';
})->name('products.create');

Route::post('products', function () {
    //
})->name('products.store');

Route::get('products/{product}', function ($product) {
    return 'Esta es la vista del producto {$product}';
})->name('products.show');

Route::get('products/{product}/edit', function ($product) {
    return 'Form para editar el producto {$product}';
})->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', function ($product) {
    //
})->name('products.update');

Route::delete('products/{product}', function ($product) {
    //
})->name('products.destroy');