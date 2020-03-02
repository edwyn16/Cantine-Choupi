<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function products() {
        $product = Product::all();
        return view('product', ['product'=>$product]);
    }
}
