<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $sort_type = "no_sort")
    {
        $cart = Cart::content();

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
