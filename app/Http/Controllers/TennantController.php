<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TennantController extends Controller
{
    function dashboard(){
        return view('frontend.tenants.index');
    }
}
