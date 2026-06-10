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
            'images.*'      => 'nullable|mimes:jpg,webp,png,jpeg'
        ]);
       
        $imagesPath = [];
        // Image 
        if(count($request->images ?? []) > 0){
            foreach($request->images as $singleImg){
                $path = $singleImg->store('units', 'public');
                $imagesPath[] = $path;
            }
        }

        
        Unit::create([
            'building_id'      => $request->building_id,
            'floor'            => $request->floor,
            'unit_num'         => $request->unit_num,
            'sq_size'          => $request->sq_size,
            'unit_type'        => $request->unit_type,
            'amount'           => $request->amount,
            'security_deposit' => $request->security_deposit,
            'details'          => $request->details,
            'images'           => json_encode($imagesPath ?? []),
            'status'           => $request->status ?? true,
        ]);

        return redirect()->route('admin.units.index')->with('success', 'Unit created successfully!');
    }

    function edit($id)
    {
        $unit = Unit::findOrFail($id);
        $buildings = Building::where('user_id', auth()->id())->select('id', 'name')->get();
        return view('backend.units.edit', compact('unit', 'buildings'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'building_id' => 'required',
            'floor'       => 'required',
            'amount'      => 'required',
            'details'     => 'required',
        ]);

        $unit = Unit::findOrFail($id);

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
            'amount'           => $request->amount,
            'security_deposit' => $request->security_deposit,
            'details'          => $request->details,
            'images'           => $images,
            'status'           => $request->status ?? $unit->status,
        ]);

        return redirect()->route('admin.units.index')->with('success', 'Unit updated successfully!');
    }

    function delete($id)
    {
        Unit::findOrFail($id)->delete();
        return redirect()->route('admin.units.index')->with('success', 'Unit deleted successfully!');
    }
}
