<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerTicketInfoController extends Controller
{
    public function CustomerAddTicketSubmit(Request $req)
    {
        print_r($req->input());

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
    }
}