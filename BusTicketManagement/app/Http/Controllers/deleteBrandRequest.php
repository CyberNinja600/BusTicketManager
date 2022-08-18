<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteBrandRequest extends Controller
{
    public function BrandrequestDelete(request $req)
    {
        //print_r($req->input());
        // $data = AllRoutes::find($req->input("RouteName"));
        // $data -> delete();
        // return redirect()->back();

        DB::delete('delete from brand_requests where id = ?',[$req->input("id")]);
        return redirect()->back();

    }
}
