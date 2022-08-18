<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\AllRoutes;
use Illuminate\Http\Request;
use App\Models\AdminAddHighlight;
use App\Models\BrandRequest;
use App\Models\CustomerTicketStorage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $notyou=Auth::user()->id;
        $allRoutes = AllRoutes::all();
        $allHighlights = AdminAddHighlight::all();
        $alluser = User::where('id','!=',$notyou)->get();
        $allticket = CustomerTicketStorage::all();
        $userType = Auth::user()->role;
        $numberofticket=0;
        $totalrevenue=0;
        $allbrandreq = BrandRequest::all();
        foreach($allticket as $item)
        {
            $numberofticket++;
        }

        foreach($allticket as $item)
        {
            $totalrevenue+=$item->totalprice;
        }
        if($userType == 'Admin'){

            return view('admin\admin', compact('allRoutes', 'allHighlights', 'alluser','allticket','numberofticket','totalrevenue','allbrandreq'));
        }
        else{
            return Redirect::back();
        }
    }   

}
