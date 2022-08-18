<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand_Ticket_Published;

class CustomerBuyTicketController extends Controller
{
    public function CustomerBuyTicketSubmit(Request $req)
    {
        $allvalues=$req->input();
        $from=$req->input('from');
        $to=$req->input('to');
        $Busseat=$req->input('Brandseat');
        $date=$req->input('date');
        $Cuseat=$req->input('Customerseat');
        $price=$req->input('price');
        $totalprice=$price*$Cuseat;
        $brandname=$req->input('ticketbrand');
        $brandid=$req->input('ticketbrandid');
        $ticketid=$req->input('ticketid');
        $busSeatLeft=$Busseat-$Cuseat;
        return view('checkout', compact('from','to','Busseat','date','Cuseat','price','totalprice','brandname','brandid','busSeatLeft','ticketid'));
        
       //print_r($allvalues);
    }
}
