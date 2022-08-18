<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Brand_Ticket_Published;
use Illuminate\Support\Facades\Redirect;

class CustomerTicketInfoController extends Controller
{
    public function CustomerAddTicketSubmit(Request $req)
    {
        $fromcus = $req->input('Customer_Start_RouteName');
        $tocus = $req->input('Customer_Destination_Name');
        $seatcus = $req->input('customer_seats'); 
        $allSearchedAvailableTicket = Brand_Ticket_Published::where('brand_ticket_date', '>', Carbon::now())->where('brand_ticket_seat', '>=', $seatcus)->Where('brand_ticket_from', '=', $fromcus)->Where('brand_ticket_to', '=', $tocus)->get();
        return view('customerticket')->with(['allSearchedAvailableTicket' =>  $allSearchedAvailableTicket]);

    }   
}
