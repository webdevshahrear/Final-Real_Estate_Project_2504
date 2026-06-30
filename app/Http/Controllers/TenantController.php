<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    function dashboard(){
        return view('frontend.tenants.index');
    }
}
