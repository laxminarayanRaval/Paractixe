<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    //
    public function pollCount(Request $req)
    {
        $result = DB::table('polldata')->where('id',$req->id)->get();
        $op = 0;

        if($req->friend == 'a') $op = $result[0]->a;
        else if($req->friend == 'b') $op = $result[0]->b;
        else if($req->friend == 'c') $op = $result[0]->c;
        else if($req->friend == 'd') $op = $result[0]->d;
       
        $res = DB::table('polldata')->where('id',$req->id)->update([$req->friend=>$op+1]);

        $result = DB::table('polldata')->where('id',$req->id)->get();
        $ttl = $result[0]->a + $result[0]->b + $result[0]->c + $result[0]->d;

        return view('home',['pollresult'=>$result[0],'totl'=>$ttl]);
        

        // dd($op);
    }
}
