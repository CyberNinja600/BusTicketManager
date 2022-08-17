<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\AllRoutes;
use Illuminate\Http\Request;
use App\Models\AdminAddHighlight;
use Illuminate\Support\Facades\Auth;

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
        $notyou=Auth::user()->id;
        $allRoutes = AllRoutes::all();
        $allHighlights = AdminAddHighlight::all();
        $alluser = User::where('id','!=',$notyou)->get();
        return view('admin\admin', compact('allRoutes', 'allHighlights', 'alluser'));
    }

}
