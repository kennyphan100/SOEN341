<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $products_in_cart = Cart::content();

        return view('cart.index', ['products' => $products_in_cart]);
    }

    public function store(Request $request)
    {
        // Find product
        $product = Product::findOrFail($request->input('product_id'));

        // Add item to session
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->input('quantity'),
            'price' => $product->price,
            'weight' => 0,
            'options' => ['image' => $product->image]
        ]);

        $request->session()->flash('status', 'The item was added to your cart!');

        return redirect()->route('cart.index');
    }

    public function delete(Request $request)
    {
        Cart::remove($request->input('row_id'));

        $request->session()->flash('status', 'The item was removed from your cart!');
        
        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        $quantity = $request->input('quantity');

        if ($quantity == 6) {
            $request->session()->flash('status', 'Max item quantity reached!');

        } else {
            Cart::update($request->input('row_id'), $quantity);
            $request->session()->flash('status', 'The item quantity was updated!');

        }

        return redirect()->route('cart.index');
    }
}
