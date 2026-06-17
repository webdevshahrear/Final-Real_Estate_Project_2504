<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class RentController extends Controller
{
    function showFlatsForRent(Request $request)
    {
        $location = $request->location;
        $unit_type = $request->unit_type;
        $min_rent = $request->min_rent;
        $max_rent = $request->max_rent;
        $status = $request->status;


        $query = Unit::query();

        if (isset($status)) {
            $query->where('status', $status);
            
        }

        if(isset($unit_type)){
            $query->where('unit_type', $unit_type);
        }
        if(isset($min_rent)){
            $query->where('amount', '>=', $min_rent);
        }
        if(isset($max_rent)){
            $query->where('amount', '<=', $max_rent);
        }

        $units = $query->with('building')->latest()->get();
        

        return view('frontend.flats-for-rent', compact('units'));
    }
}
