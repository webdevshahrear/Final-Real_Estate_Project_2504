<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    function index()
    {
        $query = Property::where('user_id', auth()->id());

        if (request('type')) {
            $query->where('type', request('type'));
        }

        $properties = $query->latest()->get();
        return view('backend.properties.index', compact('properties'));
    }

    function create()
    {
        return view('backend.properties.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'type'        => 'required',
            'location'    => 'required',
            'price'       => 'required',
            'description' => 'required',
        ]);

        Property::create([
            'title'       => $request->title,
            'type'        => $request->type,
            'location'    => $request->location,
            'price'       => $request->price,
            'size'        => $request->size,
            'bedrooms'    => $request->bedrooms,
            'bathrooms'   => $request->bathrooms,
            'description' => $request->description,
            'status'      => $request->status ?? 'available',
            'user_id'     => auth()->id(),
        ]);

        return redirect()->route('admin.properties.index')->with('success', 'Property added successfully!');
    }

    function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('backend.properties.edit', compact('property'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required',
            'type'        => 'required',
            'location'    => 'required',
            'price'       => 'required',
            'description' => 'required',
        ]);

        $property = Property::findOrFail($id);

        $property->update([
            'title'       => $request->title,
            'type'        => $request->type,
            'location'    => $request->location,
            'price'       => $request->price,
            'size'        => $request->size,
            'bedrooms'    => $request->bedrooms,
            'bathrooms'   => $request->bathrooms,
            'description' => $request->description,
            'status'      => $request->status ?? $property->status,
        ]);

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully!');
    }

    function delete($id)
    {
        Property::findOrFail($id)->delete();
        return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully!');
    }
}