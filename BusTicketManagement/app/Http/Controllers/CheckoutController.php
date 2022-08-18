<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function index()
    {   
        $userType = Auth::user()->role;
        if($userType=='Customer' || $userType == 'Admin'){
            return view('checkout');
        }

        else{
            return Redirect::back();
        }

    }
}
