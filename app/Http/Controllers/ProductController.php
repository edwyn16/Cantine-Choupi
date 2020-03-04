<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    // shows every product
    public function index() {
        $product = Product::all();
        return view('product', compact('product'));
    }
}
