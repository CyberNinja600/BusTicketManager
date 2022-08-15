<?php

namespace App\Http\Controllers;

use App\Models\AllRoutes;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        return view('brand\brand',compact('allRoutes'));
    }
}
