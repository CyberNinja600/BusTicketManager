<?php

namespace App\Http\Controllers;

use App\Models\AllRoutes;
use Illuminate\Http\Request;
use App\Models\AdminAddHighlight;
use App\Models\Brand_Ticket_Published;

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
        $allBrandTicket = Brand_Ticket_Published::all();
        $allHighlights = AdminAddHighlight::all();
        return view('customer',compact('allRoutes','allHighlights','allBrandTicket'));
    }
}
