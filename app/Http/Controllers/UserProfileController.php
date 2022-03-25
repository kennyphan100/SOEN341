<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_info()
    {
        $user = Auth::user();
        // $user_info = DB::table('users')->where('id', $user->id);

        return view('userProfile.info', ['user' => $user]);
    }

    public function show_orders()
    {
        $user = Auth::user();

        // $user_orders = DB::table('orders')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        // $product_info = null;
        // $product_info = DB::table('products')->where('id', $user_orders[0]->product_id)->get();

        // $debug_user_orders = null;
        // $debug_user_orders = $user_orders;

        $currentOrder = DB::table('orders')
                                ->join('order_products', 'orders.id', '=', 'order_products.order_id')
                                ->join('products', 'products.id', '=', 'order_products.product_id')
                                ->select('products.name', 'orders.order_total', 'order_products.product_quantity', 'orders.id', 'products.image', 'orders.order_created_at')
                                ->where('orders.user_id', $user->id)
                                ->where('orders.cancelled', 'NO')
                                ->get();
        
        

        return view('userProfile.orders', ['user'=> $user, 'currentOrder'=>$currentOrder]);

        // return view('userProfile.orders', ['debug_user_orders' => $debug_user_orders, 'user' => $user, 'user_orders' => $user_orders, 'product_info' => $product_info]);
    }

    public function show_payments()
    {
        $user = Auth::user();

        $user_payments = DB::table('test_payments')->where('user_id', $user->id)->get();

        $debug_user_payments = $user_payments;
        $debug_user_payments = null;

        return view('userProfile.payments', ['debug_user_payments' => $debug_user_payments, 'user' => $user, 'user_payments' => $user_payments]);
    }

    public function show_admin()
    {
        $user = Auth::user();

        // $user_payments = DB::table('test_payments')->where('user_id', $user->id)->get();

        // $debug_user_payments = $user_payments;
        // $debug_user_payments = null;

        return view('userProfile.admin', ['user' => $user]);
    }

    public function update_orders(Request $request){
        $user = Auth::user();
        $order_id = $request->input('order_id');

        DB::table('orders')->where('id', $order_id)->update(array('cancelled' => 'YES'));

        $currentOrder = DB::table('orders')
                                ->join('order_products', 'orders.id', '=', 'order_products.order_id')
                                ->join('products', 'products.id', '=', 'order_products.product_id')
                                ->select('products.name', 'orders.order_total', 'order_products.product_quantity', 'orders.id', 'products.image')
                                ->where('orders.user_id', $user->id)
                                ->where('orders.cancelled', 'NO')
                                ->get();

        return view('userProfile.orders', ['user'=> $user, 'currentOrder'=>$currentOrder]);

    }
}
