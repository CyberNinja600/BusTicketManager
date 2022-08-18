<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentConfirmController extends Controller
{
    public function CustomerPaymentFinalSubmit(Request $req)
    {
        print_r($req->input());
        $from=$req->input('from');
        $to=$req->input('to');
        $date=$req->input('date');
        $customerseat=$req->input('Customerseat');
        $totalprice=$req->input('totalprice');
        $busSeatLeft=$req->input('busSeatLeft');
        $brandname=$req->input('brandname');
        $brandid=$req->input('brandid');
        // print_r($from);
        // print_r($to);
        // print_r($date);
        // print_r($customerseat);
        // print_r($totalprice);
        // print_r($busSeatLeft);
        // print_r($brandname);
        // print_r($brandid);
    }
}
