<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\Models\Brand_Ticket_Published;

class BrandTicketPublishedController extends Controller
{
    public function BrandAddTicketSubmit(Request $req)
    {
        // print_r($req->input());

        $author_id = Auth::user()->id;
        $authod_name = Auth::user()->name;
        $data = new Brand_Ticket_Published;
        $data->brand_ticket_author_id = $author_id;
        $data -> brand_ticket_from = $req->input("Start_RouteName");
        $data -> brand_ticket_to = $req->input("Destination_RouteName");
        $data -> brand_ticket_seat = $req->input("No_Seats");
        $data -> brand_ticket_date = $req->input("Start_Time");
        $data -> brand_ticket_price = $req->input("Ticket_Price");
        $data -> brand_ticket_author_name = $authod_name;
        $data -> save();
        return redirect()->back();
    }
    public function BrandDeleteTicketSubmit(request $req)
    {
        //print_r($req->input());
        // $data = AllRoutes::find($req->input("RouteName"));
        // $data -> delete();
        // return redirect()->back();

        DB::delete('delete from brand__ticket__publisheds where id = ?',[$req->input("ticket_delete")]);
        return redirect()->back();

    }
}
