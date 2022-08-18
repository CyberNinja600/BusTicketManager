<?php

namespace App\Http\Controllers;

use App\Models\BrandRequest;

use Illuminate\Http\Request;

class BrandRequestServController extends Controller
{
    public function BrandRequestSubmit(Request $req)
    {
        
        #print_r($req->input());
        $data = new BrandRequest;
        $data -> requestName = $req->input("name");
        $data -> requestEmail = $req->input("email");
        $data -> requestMessage = $req->input("message");
        $data -> save();
        return redirect()->back()->with('success', 'Your request was sent, we will get back to you soon');   
    }
}
