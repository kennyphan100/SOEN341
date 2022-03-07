<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function show_all_products()
    {
        $user = Auth::user();
        $all_products = DB::table('products')->get();

        return view('userProfile.admin_product_manage', ['user' => $user, 'products' => $all_products]);
    }

    public function show_all_categories()
    {
        $user = Auth::user();
        $all_products = DB::table('products')->get();

        return view('userProfile.admin_product_manage', ['user' => $user, 'products' => $all_products]);
    }
}
