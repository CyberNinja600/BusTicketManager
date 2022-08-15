<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Brand_Ticket_Published;

class BrandTicketPublishedController extends Controller
{
    public function BrandAddTicketSubmit(Request $req)
    {
        print_r($req->input());
        $data = new Brand_Ticket_Published;
        $data -> brand_ticket_from = $req->input("Start_RouteName");
        $data -> brand_ticket_to = $req->input("Destination_RouteName");
        $data -> brand_ticket_seat = $req->input("No_Seats");
        $data -> brand_ticket_date = $req->input("Start_Time");
        $data -> brand_ticket_price = $req->input("Ticket_Price");
        $data -> save();
        return redirect()->back();
    }
}
