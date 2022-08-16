<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddHighlight;
use App\Models\AllRoutes;
class CustomerController extends Controller
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
        $allRoutes = AllRoutes::all();
        $allHighlights = AdminAddHighlight::all();
        return view('customer',compact('allRoutes', 'allHighlights'));
    }
}
