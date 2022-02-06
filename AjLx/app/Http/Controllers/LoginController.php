<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    function check(Request $req){

        $result = DB::table('users_mst')->where(['uname'=>$req->get('uname'),'upass'=>$req->get('upass')])->first();
        if ($result == NULL){ 
            // Session::put('username','AJLx');
            return Redirect('/login/wrong data');
        }else{
            $req->session()->put('username',$result->upass);

            return Redirect('/home');
        }
        return $result;
    }
}
