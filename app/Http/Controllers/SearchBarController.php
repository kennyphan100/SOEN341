<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class SearchBarController extends Controller
{
    public function search(){
        $cart = Cart::content();

        $searchQuery = $_GET['searchQuery'];

        $searchResults = DB::table('products')->where('name', 'LIKE', '%'.$searchQuery.'%')
                                              ->orWhere('category', 'LIKE', '%'.$searchQuery.'%')->get();

        return view('categories.show', ['products'=> $searchResults, 'category' => count($searchResults)." item(s) found", 'cart' => $cart]);
    }
}
