<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        // Route::get('/', function () {

            $userType='guest';
            if(!Auth::check()){
                $userType='guest';
                }
                
            else{
                $userType = Auth::user()->role;
            }

            if($userType==Null){
                $userType='guest';
            }
            return view('welcome',compact('userType'));
            
        // });
    }
}
