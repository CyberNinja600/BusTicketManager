<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Route::get('/', function () {
            return view('welcome');
        // });
    }
}
