<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AllRoutes;
class AdminAddRouteController extends Controller
{
    public function AdminRouteAddSubmit(Request $req)
    {
        print_r($req->input());
        // $data = new AllRoutes;
        // $data -> route_name = $req->input();
        // echo $data->save();

        //echo $data->save();
    }
    
}
