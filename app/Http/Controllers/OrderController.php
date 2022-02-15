<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $products_in_cart = Cart::content();
        return view('order.index', ['products' => $products_in_cart]);
    }

    public function orderPlaced(Request $req)
    {

        $products_in_cart = Cart::content();
        $user = Auth::user();
        $subtotal = 0;
        $nb_of_items = 0;
            
        foreach($products_in_cart as $product) 
        {
            $subtotal += ($product->price*$product->qty);
            $nb_of_items += $product->qty;
        }

        foreach($products_in_cart as $cart)
        {
            $order = new Order;
            $order -> user_Id = $user->id;
            $order -> product_id = $cart->id;
            $order -> firstname = $req->firstName;
            $order -> lastname = $req->lastName;
            $order -> address = $req->address;
            $order -> address2 = $req->address2;
            $order -> country = $req->country;
            $order -> state_province = $req->province;
            $order -> zipcode = $req->zip;
            $order -> payment_method = $req->paymentMethod;
            $order -> credit_card_number = $req->cc_number;
            $order -> status = "pending";
            $order -> totalprice = $subtotal;
            $order->save();
        }
        
        Cart::destroy(); //empties the cart
        return view('order.orderMade');
    }
}


?>