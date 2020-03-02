<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show() {
        $products = DB::table('products')->get();
        $categories = DB::table('categories')->get();

        $data = [
            'products' => $products,
            'categories' => $categories
        ];

        return view('category')->with($data);
    }

    public function showCategoryProducts($id) {
        $category = Category::all();
        $categories = Category::with(['product'])->find($id);
        return view('categoryProducts', compact('category', 'categories'));
    }
}
