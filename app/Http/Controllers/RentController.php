<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class RentController extends Controller
{
    function showFlatsForRent(){
        $units = Unit::with('building')->where('status', 1)->latest()->get();
        // dd($units);
        return view('frontend.flats-for-rent', compact('units'));
    }
}
