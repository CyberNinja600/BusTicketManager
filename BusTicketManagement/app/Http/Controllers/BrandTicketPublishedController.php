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
        // $data = new Brand_Ticket_Published;
        // $data -> route_name = $req->input("RouteName");
        // $data -> save();
        // return redirect()->back();
    }
}
