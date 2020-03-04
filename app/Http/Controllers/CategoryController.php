<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with(['product'])->get();

        $data = [
            'categories' => $categories
        ];

        return view('category')->with($data, compact('categories'));
    }

    public function show($id) {
        $category = Category::all();
        $categories = Category::with(['product'])->find($id);
        return view('categoryProducts', compact('category', 'categories'));
    }
}
