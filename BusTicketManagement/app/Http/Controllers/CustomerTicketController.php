<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerTicketController extends Controller
{
    public function index()
    {   
        $userType = Auth::user()->role;
        if($userType=='Customer' || $userType == 'Admin'){
            return view('customerticket');
        }
        else{
            return Redirect::back();
        }

    }
}
