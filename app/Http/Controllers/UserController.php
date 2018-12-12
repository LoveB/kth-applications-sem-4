<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function userDetails(Request $request)
    {
        if(Auth::check()){
            $username = auth()->user()->name;
            return response()->json(['success' => $username]);
    } else {
            return response()->json(['error' => 'user not logged in']);
    }
}
}
