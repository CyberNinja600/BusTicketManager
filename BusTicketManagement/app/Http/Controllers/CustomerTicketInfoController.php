<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AllRoutes;
use Illuminate\Http\Request;
use App\Models\AdminAddHighlight;
use App\Models\CustomerTicketInfo;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand_Ticket_Published;
use Illuminate\Support\Facades\Redirect;

class CustomerTicketInfoController extends Controller
{
    public function CustomerAddTicketSubmit(Request $req)
    {
        $fromcus = $req->input('Customer_Start_RouteName');
        $tocus = $req->input('Customer_Destination_Name');
        $seatcus = $req->input('customer_seats');
        // print_r($fromcus);
        // print_r($tocus);
        // print_r($seatcus);


        $allSearchedAvailableTicket = Brand_Ticket_Published::where('brand_ticket_date', '>', Carbon::now())->where('brand_ticket_seat', '>=', $seatcus)->Where('brand_ticket_from', '=', $fromcus)->Where('brand_ticket_to', '=', $tocus)->get();

        #rint($allSearchedAvailableTicket);

        // $author_id = Auth::user()->id;
        // $data = new Brand_Ticket_Published;
        // $data->brand_ticket_author_id = $author_id;
        // $data -> brand_ticket_from = $req->input("Start_RouteName");
        // $data -> brand_ticket_to = $req->input("Destination_RouteName");
        // $data -> brand_ticket_seat = $req->input("No_Seats");
        // $data -> brand_ticket_date = $req->input("Start_Time");
        // $data -> brand_ticket_price = $req->input("Ticket_Price");
        // $data -> save();
        // return redirect()->back();


        $allRoutes = AllRoutes::all();
        $allBrandTicket = Brand_Ticket_Published::all();
        $allHighlights = AdminAddHighlight::all();
        $allavailableTicket = Brand_Ticket_Published::where('brand_ticket_date', '>', Carbon::now())->where('brand_ticket_seat', '>', 0)->get();

        

        return view('customer', compact('allRoutes', 'allHighlights', 'allavailableTicket', 'allBrandTicket', 'allSearchedAvailableTicket'));
        return redirect()->back();


    }
}
