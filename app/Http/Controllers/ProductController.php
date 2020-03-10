<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class ProductController extends Controller
{
    // shows every product
    public function index() {
        $product = Product::all();
        return view('product', compact('product'));
    }

    public function addProduct(Request $request, $id) {
        $product = Product::find($id);
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = [];
        }
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart->get());
        return redirect()->back();
    }

    public function cart() {
        if (!Session::has('cart')) {
            return redirect()->back();
        }
        $oldCart = Session::get('cart');
        return view('shoppingCart', ['cart' => $oldCart]);
    }

    public function checkout() {
        if (!Session::has('cart')) {
            return redirect()->back();
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $total['totalPrice'];
        return view('product.checkout', ['cart' => $total]);
    }
}
