<?php

namespace App\Http\Controllers;

use App\Models\AllRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand_Ticket_Published;
use Carbon\Carbon;

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
        $author_id = Auth::user()->id;
        $allRoutes = AllRoutes::all();
        $brandSpecifiedTicket = Brand_Ticket_Published::where('brand_ticket_author_id', $author_id)->where('brand_ticket_date','>',Carbon::now())->where('brand_ticket_seat','>',0)->get();

        $brandSpecifiedExpiredTicketDate = Brand_Ticket_Published::where('brand_ticket_author_id', $author_id)->where('brand_ticket_date','<',Carbon::now())->get();
        $brandSpecifiedExpiredTicketSeat = Brand_Ticket_Published::where('brand_ticket_author_id', $author_id)->where('brand_ticket_seat','=',0)->get();
        return view('brand\brand',compact('allRoutes','brandSpecifiedTicket','brandSpecifiedExpiredTicketDate','brandSpecifiedExpiredTicketSeat'));
    }
}
