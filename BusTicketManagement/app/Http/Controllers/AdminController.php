<?php

namespace App\Http\Controllers;
use App\Models\AllRoutes;
use Illuminate\Http\Request;
use App\Models\AdminAddHighlight;

class AdminController extends Controller
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
        return view('admin\admin', compact('allRoutes', 'allHighlights'));
    }

}
