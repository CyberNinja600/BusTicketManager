<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        if(!Auth::check()) {
        $userType='guest';
        }

        else{
            $userType = Auth::user()->role;
        }

        if($userType==Null){
            $userType='guest';
        }
        return view('home',compact('userType'));
    }
}
