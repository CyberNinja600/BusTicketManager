<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AllRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerTicketStorage;
use App\Models\Brand_Ticket_Published;
use Illuminate\Support\Facades\Redirect;

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
        $author_name = Auth::user()->name;
        $allRoutes = AllRoutes::all();
        $brandSpecifiedTicket = Brand_Ticket_Published::where('brand_ticket_author_id', $author_id)->where('brand_ticket_date','>',Carbon::now())->where('brand_ticket_seat','>',0)->get();

        $brandSpecifiedExpiredTicketDate = Brand_Ticket_Published::where('brand_ticket_author_id', $author_id)->where('brand_ticket_date','<',Carbon::now())->get();
        $brandSpecifiedExpiredTicketSeat = Brand_Ticket_Published::where('brand_ticket_author_id', $author_id)->where('brand_ticket_seat','=',0)->get();
        
        $allticket = CustomerTicketStorage::where('ticketbrand','=',$author_name)->get();

        $userType = Auth::user()->role;
        $numberofticket=0;
        $totalrevenue=0;
        foreach($allticket as $item)
        {
            $numberofticket++;
        }

        foreach($allticket as $item)
        {
            $totalrevenue+=$item->totalprice;
        }
        
        if($userType=='Brand' || $userType == 'Admin'){
            return view('brand\brand',compact('allRoutes','brandSpecifiedTicket','brandSpecifiedExpiredTicketDate','brandSpecifiedExpiredTicketSeat','allticket','numberofticket','totalrevenue'));
        }
        else{
             
            return Redirect::back();
        }
    }
}
