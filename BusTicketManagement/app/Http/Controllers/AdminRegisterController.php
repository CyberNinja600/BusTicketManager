<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminRegisterController extends Controller
{
    public function AdminRegisterSubmit(Request $req)
    {

        $namecheck=$req->input('name');
        $emailcheck=$req->input('email');
        $passwordcheck=$req->input('password');
        $passwordconfirmcheck=$req->input('password_confirmation');


        $user = user::where('name', '=', $namecheck)->first();
        if ($user === null) {
            $user = user::where('email', '=', $emailcheck)->first();
                if ($user === null) {
                        if ($passwordcheck === $passwordconfirmcheck) {
                            // $user = new user;
                            // $user->name = $namecheck;
                            // $user->email = $emailcheck;
                            // $user->password = bcrypt($passwordcheck);
                            // $user->save();
                            // return redirect('/admin/login');
                            return Redirect::back()->with('worked', 'You have successfully registered');
                        } else {
                            return Redirect::back()->with('errorpassword', 'Password do not match ❌');
                        }
                } 
                else {
                    return Redirect::back()->with('erroremail', 'The email has already been taken ❌');
                }
        }
        else{
            return Redirect::back()->with('errorname', 'The username has already been taken ❌');
        }
    }
}
