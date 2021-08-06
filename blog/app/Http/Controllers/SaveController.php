<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SaveController extends Controller
{
    public function Datashow(Request $request)
    {
        //session
        // return  $request->session()->get('namekey');
        return $request->cookie('namekey');
    }


    public function DataClear(Request $request)
    {
        //session
        // $request->session()->forget('namekey');
    }
}
