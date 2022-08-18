<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AllRoutes;
use Illuminate\Http\Request;
use App\Models\AdminAddHighlight;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerTicketStorage;
use App\Models\Brand_Ticket_Published;
use Illuminate\Support\Facades\Redirect;

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
        $allavailableTicket = Brand_Ticket_Published::where('brand_ticket_date','>',Carbon::now())->where('brand_ticket_seat','>',0)->get();
        $userType = Auth::user()->role;
        $author_name = Auth::user()->name;
        $allticket = CustomerTicketStorage::where('customer_name','=',$author_name)->get();
        if($userType=='Customer' || $userType == 'Admin'){
            return view('customer', compact('allRoutes', 'allHighlights', 'allavailableTicket', 'allBrandTicket','allticket'));
        }
        else{
            return Redirect::back();
        }

    }
}
