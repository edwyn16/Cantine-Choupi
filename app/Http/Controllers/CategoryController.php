<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function category() {
        $category = Category::all();
        return view('home', ['category'=>$category]);
    }
}
