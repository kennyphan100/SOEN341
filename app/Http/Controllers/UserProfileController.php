<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class UserProfileController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::content();
        
        $sort_type = "no_sort";

        if ($sort_type == 'asc') {
            $products_for_this_category_sorted_by_price_asc = DB::table('products')->where('category', $id)->orderBy('price', 'asc')->get();

            $products_for_this_category = $products_for_this_category_sorted_by_price_asc;
        } elseif ($sort_type == 'desc') {
            $products_for_this_category_sorted_by_price_desc = DB::table('products')->where('category', $id)->orderBy('price', 'desc')->get();

            $products_for_this_category = $products_for_this_category_sorted_by_price_desc;
        } else { // no_sort -> No sorting selected
            $products_for_this_category = DB::table('products')->where('category', $id)->get();
        }

        return view('categories.show', ['category' => $id, 'products' => $products_for_this_category, 'cart' => $cart]);
    }
}
