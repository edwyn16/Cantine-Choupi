<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/category', 'CategoryController@index');
Route::get('/categories/{id}', 'CategoryController@show');
Route::get('/product', [
    'uses' => 'ProductController@index',
    'as' => 'product.index'
]);

Route::get('/addProduct/{id}', [
    'uses' => 'ProductController@addProduct',
    'as' => 'product.addProduct'
    ]);

Route::get('/shoppingCart', [
    'uses' => 'ProductController@cart',
    'as' => 'product.shoppingCart'
    ]);

Route::get('/checkout', [
    'uses' => 'ProductController@checkout',
    'as' => 'product.checkout'
]);
