<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;
use App\Order;
use App\OrderList;

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
        $total = $cart->totalPrice;
        return view('checkout', ['cart' => $total]);
    }

    public function succes(Request $request) {
        $order = new Order;

        $order->firstname = $request->firstname;
        $order->lastname = $request->lastname;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->email = $request->email;
        $order->tel = $request->tel;
        $order->save();

        function productInDB() {
            $session = Session::get('cart');

            foreach ($session['items'] as $item) {
                $orderList = new OrderList($item);

                $orderList->products = $item['items']->name;
                $orderList->price = $item['price'];
                $orderList->amount = $item['totalAmount'];
                $orderList->order_id = $order->id;

                $orderList->save();
            }

            Session::forget('cart');
            $cart = new Cart();
            Session::put('cart', $cart->get());
        }

        $request->session()->flash('success', 'Order has been sent!!!');
        return redirect()->back();
    }
}
