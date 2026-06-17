<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RentController extends Controller
{
    function showFlatsForRent(Request $request)
    {
        
        $query = Unit::with('building')->where('status', 1);

        // Filter: Location / Area (searches building name or address)
        if ($request->filled('location')) {
            $loc = $request->location;
            $query->whereHas('building', function ($q) use ($loc) {
                $q->whereLike('name', "%$loc%")
                  ->orWhereLike('address',  "%$loc%");
            });
        }

        // Filter: Bedrooms (min)
        if ($request->filled('bedrooms')) {
            $query->where('bedrooms', '>=', (int) $request->bedrooms);
        }

        // Filter: Price range
        if ($request->filled('min_price')) {
            $query->where('amount', '>=', (float) $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('amount', '<=', (float) $request->max_price);
        }

        // Filter: Availability
        if ($request->filled('availability')) {
            $today = Carbon::today();
            switch ($request->availability) {
                case 'now':
                    // available_from is null (immediately) or already passed
                    $query->where(function ($q) use ($today) {
                        $q->whereNull('available_from')
                          ->orWhere('available_from', '<=', $today);
                    });
                    break;
                case '1month':
                    $query->where(function ($q) use ($today) {
                        $q->whereNull('available_from')
                          ->orWhere('available_from', '<=', $today->copy()->addMonth());
                    });
                    break;
                case '3months':
                    $query->where(function ($q) use ($today) {
                        $q->whereNull('available_from')
                          ->orWhere('available_from', '<=', $today->copy()->addMonths(3));
                    });
                    break;
                // 'any' = no filter
            }
        }

        // Filter: Preferences (checkboxes)
        if ($request->boolean('pet_friendly')) {
            $query->where('pet_friendly', true);
        }
        if ($request->boolean('is_furnished')) {
            $query->where('is_furnished', true);
        }
        if ($request->boolean('has_gym')) {
            $query->where('has_gym', true);
        }
        if ($request->boolean('has_rooftop')) {
            $query->where('has_rooftop', true);
        }
        if ($request->boolean('has_parking')) {
            $query->where('has_parking', true);
        }

        $units = $query->latest()->get();

        return view('frontend.flats-for-rent', compact('units'));
    }


    function singleRentUnit($id){
        $unit = Unit::with('building')->find($id);
        return view('frontend.property-detail-rent', compact('unit'));
    }
}
