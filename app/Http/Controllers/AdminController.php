<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function show_product()
    {
        $user = Auth::user();
        $all_products = DB::table('products')->get();

        return view('userProfile.admin_product_show', ['user' => $user, 'products' => $all_products]);
    }
    
    public function show_all_products()
    {
        $user = Auth::user();
        $all_products = DB::table('products')->get();

        return view('userProfile.admin_product_manage', ['user' => $user, 'products' => $all_products]);
    }

    public function show_add_product()
    {
        $user = Auth::user();

        $categories = DB::table('categories')->get();

        return view('userProfile.admin_product_add', ['user' => $user, 'categories' => $categories]);
    }
    public function show_add_category()
    {
        $user = Auth::user();

        return view('userProfile.admin_category_add', ['user' => $user]);
    }

    public function show_all_categories()
    {
        $user = Auth::user();
        $all_categories = DB::table('categories')->get();

        return view('userProfile.admin_category_manage', ['user' => $user, 'categories' => $all_categories]);
    }

    public function add_product(Request $request) {

        $request->validate([
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product_name = $request->input('product_name');
        $description = $request->input('description');
        $price = $request->input('price');
        $category = $request->input('category');
        $image_file = $request->file('image');

        // Save image file into source code: public > images
        $file_name = $image_file->getClientOriginalName();
        $request->image->move(public_path('/images'), $file_name);

        // Save product into database: table > products
        $product = new Product;
        $product->name = $product_name;
        $product->description = $description;
        $product->price = $price;
        $product->category = $category;
        $product->image = $file_name;

        $product->save();

        $request->session()->flash('status', 'The product was added succesfully!');

        return redirect()->route('userProfile.show_user_admin_add_product');
    }
}
