<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminRegisterController extends Controller
{
    public function AdminRegisterSubmit(Request $req)
    {

        $namecheck=$req->input('name');
        $emailcheck=$req->input('email');
        $passwordcheck=$req->input('password');
        $passwordconfirmcheck=$req->input('password_conf');
        $rolecheck=$req->input('role');

        $user = user::where('name', '=', $namecheck)->first();
        if ($user === null) {
            $user = user::where('email', '=', $emailcheck)->first();
                if ($user === null) {
                        if ($passwordcheck === $passwordconfirmcheck) {
                            if(strlen($passwordcheck>8)){
                            $user = new user;
                            $user->name = $namecheck;
                            $user->email = $emailcheck;
                            $user->password = Hash::make($passwordcheck);
                            $user->role = $rolecheck;
                            #$user->created_at= timestamp();
                            $user->save();
                            return Redirect::back()->with('worked', 'User added successfully');
                            #return Redirect::back()->with('worked', 'You have successfully registered');
                            }
                            else{
                                return Redirect::back()->with('errornotlong', 'Password must be at least 8 characters');
                            }
                        } 
                        else {
                            return Redirect::back()->with('errorpasswordmatch', 'Password do not match ❌');
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
    public function AdminRegisterDeleteSubmit(request $req)
    {   
        $namecheck=$req->input('name');
        // print_r($namecheck);
        DB::delete('delete from users where name = ?',[$namecheck]);
        $message= $namecheck.' was deleted successfully';
        return Redirect::back()->with('deletedW',$message);
    }
}
