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
        print_r($req->input());

    }
}
