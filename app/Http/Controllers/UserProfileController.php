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
    public function show()
    {
        $user = Auth::user();
        // $user_name = Auth::user()->name;

        return view('userProfile.show', ['user_name' => $user->name]);
        // return view('userProfile.show', ['user_name' => $user]);
    }
}
