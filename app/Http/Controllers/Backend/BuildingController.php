<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBuildingRequest;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Uri\Builder;

class BuildingController extends Controller
{
    function index()
    {
        $buildings = Building::where('user_id', auth()->id())->orderBy('status', 'desc')->get();

        return view('backend.building.index', compact('buildings'));
    }

    function create()
    {
        return view('backend.building.create');
    }

    function store(StoreBuildingRequest $request)
    {

        // Foreach
        $images = [];
        if (count($request->images ?? []) > 0) {
            foreach ($request->images as $img) {
                $images[] =  $img->store('buildings', 'public');
            }
        }

        $building = Building::create([
            "user_id" => auth()->id(),
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'total_floors' => $request->total_floors,
            'building_type' => $request->building_type,
            'amenities' => $request->amenities,
            'images' => json_encode($images),
            'status' => $request->status,
        ]);

        return to_route('admin.building.index');
    }

    function edit($id)
    {
        $building = Building::where('user_id', auth()->id())->findOrFail($id);
        return view('backend.building.edit', compact('building'));
    }

    function update(StoreBuildingRequest $request, $id)
    {
        $building = Building::where('user_id', auth()->id())->findOrFail($id);

        // Handle images
        $images = json_decode($building->images ?? '[]', true);
        if ($request->hasFile('images')) {
            // Delete old images if new ones are uploaded
            foreach ($images as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
            $images = [];
            foreach ($request->images as $img) {
                $images[] = $img->store('buildings', 'public');
            }
        }

        $building->update([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'total_floors' => $request->total_floors,
            'building_type' => $request->building_type,
            'amenities' => $request->amenities,
            'images' => json_encode($images),
            'status' => $request->status,
        ]);

        return to_route('admin.building.index');
    }


    function delete($id)
    {
        try {
            $building = Building::where('user_id', auth()->id())->findOrFail($id);
            
            // Delete associated images
            if ($building->images) {
                $imgArray = json_decode($building->images, true);
                if (is_array($imgArray)) {
                    foreach ($imgArray as $img) {
                        if (Storage::disk('public')->exists($img)) {
                            Storage::disk('public')->delete($img);
                        }
                    }
                }
            }
            
            $building->delete();
            
            return back()->with('success', 'Building deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete building. Please try again.');
        }
    }
}
