<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerTicketStorage;

class PaymentConfirmController extends Controller
{
    public function CustomerPaymentFinalSubmit(Request $req)
    {
        
        #print_r($req->input());
        $from=$req->input('from');
        $to=$req->input('to');
        $date=$req->input('date');
        $customerseat=$req->input('Customerseat');
        $totalprice=$req->input('totalprice');
        $busSeatLeft=$req->input('busSeatLeft');
        $brandname=$req->input('brandname');
        $brandid=$req->input('brandid');
        $userId = Auth::id();
        $username= Auth::user()->name;
        $ticketid=$req->input('ticketid');
        // print_r($from);
        // print_r($to);
        // print_r($date);
        // print_r($customerseat);
        // print_r($totalprice);
        //print_r($busSeatLeft);
        // print_r($brandname);
        // print_r($brandid);
        // print_r($userId);
        // print_r($username);
        // print_r($ticketid);

        #print_r(gettype($date));

        $data = new CustomerTicketStorage;
        $data -> customer_id = $userId;
        $data -> customer_name = $username;
        $data -> from = $from;
        $data -> to = $to;
        $data -> date = $date;
        $data -> Customerseat = $customerseat;
        $data -> totalprice = $totalprice;
        $data -> ticketbrand = $brandname;
        $data -> ticketid = $ticketid;
        $data -> brand_ticket_id = $brandid;

        $data -> save();
        $affected = DB::table('brand__ticket__publisheds')->where('id', $ticketid)->update(['brand_ticket_seat' => $busSeatLeft]);
        
        return redirect()->route('customer')->with('success', 'Thankyou for picking us');


    }
}
