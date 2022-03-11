<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\Order_Product;

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

        $order = new Order;
        $order -> user_Id = $user->id;
        $order -> city = $req->city;
        $order -> shipping_address = $req->address;
        $order -> postal_code = $req->zip;
        $order -> credit_card_number = $req->cc_number;
        $order -> name_on_card = $req->cc_name;
        $order -> cc_security_code = $req->cc_cvv;
        $order -> order_total = $subtotal;
        $order -> cancelled = "NO";
        $order->save();

        $order_id = $order->id; //gets last id inserted

        foreach($products_in_cart as $cart)
        {
            $order_product = new Order_Product;
            $order_product -> order_id = $order_id;
            $order_product -> product_id = $cart->id;
            $order_product -> product_quantity = $cart->qty;
            $order_product->save();
        }
        
        Cart::destroy(); //empties the cart
        return view('order.orderMade');
    }
}


?>