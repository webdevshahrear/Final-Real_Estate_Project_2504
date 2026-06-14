<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'images.*'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('properties', 'public');
                $images[] = $path;
            }
        }

        Property::create([
            'title'       => $request->title,
            'type'        => $request->type,
            'location'    => $request->location,
            'price'       => $request->price,
            'size'        => $request->size,
            'description' => $request->description,
            'images'      => $images,
            'status'      => $request->status ?? 'available',
            'user_id'     => auth()->id(),
        ]);

        return redirect()->route('admin.properties.index')->with('success', 'Property added successfully!');
    }

    function edit($id)
    {
        $property = Property::findOrFail($id);

        if ($property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

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
            'images.*'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $property = Property::findOrFail($id);

        if ($property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $images = $property->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('properties', 'public');
                $images[] = $path;
            }
        }

        $property->update([
            'title'       => $request->title,
            'type'        => $request->type,
            'location'    => $request->location,
            'price'       => $request->price,
            'size'        => $request->size,
            'description' => $request->description,
            'images'      => $images,
            'status'      => $request->status ?? $property->status,
        ]);

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully!');
    }

    function delete($id)
    {
        $property = Property::findOrFail($id);

        if ($property->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        if ($property->images) {
            foreach ($property->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $property->delete();
        return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully!');
    }
}