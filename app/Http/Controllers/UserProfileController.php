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

        return view('userProfile.info', ['user_name' => $user->name]);
    }

    public function show_orders()
    {
        $user = Auth::user();

        return view('userProfile.orders', ['user_name' => $user->name]);
    }

    public function show_payments()
    {
        $user = Auth::user();

        return view('userProfile.payments', ['user_name' => $user->name]);
    }
}
