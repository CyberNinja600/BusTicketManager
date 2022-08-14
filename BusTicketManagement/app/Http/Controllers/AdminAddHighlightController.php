<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AdminAddHighlight;
class AdminAddHighlightController extends Controller
{
    public function AdminAddHighlightSubmit(Request $req)
    {
        // print_r($req->input());
        $data = new AdminAddHighlight;
        $data -> highlight_name = $req->input("HighlightName");
        $data -> save();
        return redirect()->back();
    }

    public function AdminAddHighlightDeleteSubmit(request $req)
    {
        // print_r($req->input());
        // $data = AdminAddHighlight::find($req->input("HighlightName"));
        // $data -> delete();
        // return redirect()->back();
        
        DB::delete('delete from admin_add_highlights where highlight_name = ?',[$req->input("HighlightName")]);
        return redirect()->back();
        
    }
}
