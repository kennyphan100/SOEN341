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
        $user_info = Auth::user();
        // $user_info = DB::table('users')->where('id', $user->id);

        return view('userProfile.info', ['user_info' => $user_info]);
    }

    public function show_orders()
    {
        $user = Auth::user();

        $user_orders = DB::table('orders')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        return view('userProfile.orders', ['user_orders' => $user_orders]);
    }

    public function show_payments()
    {
        $user = Auth::user();
        
        $user_payments = DB::table('test_payments')->where('user_id', $user->id)->get();

        $debug_user_payments = $user_payments;
        $debug_user_payments = null;

        return view('userProfile.payments', ['debug_user_payments' => $debug_user_payments, 'user' => $user, 'user_payments' => $user_payments]);
    }
}
