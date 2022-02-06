<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegisController extends Controller
{
    //
    public function register(Request $req)
    {
        $name = $req->get('uname');
        $email = $req->get('uemail');
        $pass = $req->get('upass');

        $result = DB::table('users_mst')->insert(['uname'=>$name,'uemail'=>$email,'upass'=>$pass]);

        if ($result) return Redirect('/login');
        else return Redirect('/registration');

        // return "Data inserted Successfully : ".$result;
    }
}
