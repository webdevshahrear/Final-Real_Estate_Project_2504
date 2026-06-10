<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;

class PropertyController extends Controller
{
    function index()
    {
        $query = Property::query();

        if (request('type')) {
            $query->where('type', request('type'));
        }

        if (request('search')) {
            $query->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('location', 'like', '%' . request('search') . '%');
        }

        $properties = $query->where('status', 'available')->latest()->get();
        return view('frontend.properties.index', compact('properties'));
    }

    function show($id)
    {
        $property = Property::findOrFail($id);
        return view('frontend.properties.show', compact('property'));
    }
}