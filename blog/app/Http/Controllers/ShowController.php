<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ShowController extends Controller
{
    public function DataSave(Request $request)
    {
        //session
        // $request->session()->put('namekey', 'pranto');


        Cookie::queue('namekey', 'pranto', 400000);
    }
}
