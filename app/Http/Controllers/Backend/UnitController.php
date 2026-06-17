<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    function index()
    {
        $units = Unit::with('building')->latest()->get();
        return view('backend.units.index', compact('units'));
    }

    function create()
    {
        $buildings = Building::where('user_id', auth()->id())->select('id', 'name')->get();
        return view('backend.units.create', compact('buildings'));
    }

    function store(Request $request)
    {
        $request->validate([
            'building_id' => 'required',
            'floor'       => 'required',
            'amount'      => 'required',
            'details'     => 'required',
            'bedrooms'    => 'required|integer|min:1',
        ]);

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('units', 'public');
                $images[] = $path;
            }
        }

        Unit::create([
            'building_id'      => $request->building_id,
            'floor'            => $request->floor,
            'unit_num'         => $request->unit_num,
            'sq_size'          => $request->sq_size,
            'unit_type'        => $request->unit_type,
            'bedrooms'         => $request->bedrooms,
            'amount'           => $request->amount,
            'security_deposit' => $request->security_deposit,
            'details'          => $request->details,
            'images'           => json_encode($images),
            'status'           => $request->status ?? true,
            'available_from'   => $request->available_from ?: null,
            'pet_friendly'     => $request->boolean('pet_friendly'),
            'is_furnished'     => $request->boolean('is_furnished'),
            'has_gym'          => $request->boolean('has_gym'),
            'has_rooftop'      => $request->boolean('has_rooftop'),
            'has_parking'      => $request->boolean('has_parking'),
        ]);

        return redirect()->route('admin.units.index')->with('success', 'Unit created successfully!');
    }

    function edit($id)
    {
        $unit = Unit::findOrFail($id);
        $buildings = Building::where('user_id', auth()->id())->select('id', 'name')->get();

        if ($unit->building->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('backend.units.edit', compact('unit', 'buildings'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'building_id' => 'required',
            'floor'       => 'required',
            'amount'      => 'required',
            'details'     => 'required',
            'bedrooms'    => 'required|integer|min:1',
        ]);

        $unit = Unit::findOrFail($id);

        if ($unit->building->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $images = $unit->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('units', 'public');
                $images[] = $path;
            }
        }

        $unit->update([
            'building_id'      => $request->building_id,
            'floor'            => $request->floor,
            'unit_num'         => $request->unit_num,
            'sq_size'          => $request->sq_size,
            'unit_type'        => $request->unit_type,
            'bedrooms'         => $request->bedrooms,
            'amount'           => $request->amount,
            'security_deposit' => $request->security_deposit,
            'details'          => $request->details,
            'images'           => $images,
            'status'           => $request->status ?? $unit->status,
            'available_from'   => $request->available_from ?: null,
            'pet_friendly'     => $request->boolean('pet_friendly'),
            'is_furnished'     => $request->boolean('is_furnished'),
            'has_gym'          => $request->boolean('has_gym'),
            'has_rooftop'      => $request->boolean('has_rooftop'),
            'has_parking'      => $request->boolean('has_parking'),
        ]);

        return redirect()->route('admin.units.index')->with('success', 'Unit updated successfully!');
    }

    function delete($id)
    {
        $unit = Unit::findOrFail($id);

        if ($unit->building->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $unit->delete();
        return redirect()->route('admin.units.index')->with('success', 'Unit deleted successfully!');
    }
}