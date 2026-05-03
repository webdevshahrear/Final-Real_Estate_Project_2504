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


    function delete($id)
    {
        $building = Building::find($id);
        $images = $building->images;

        if ($images) {
            $imgArray = json_decode($images  ?? '');
            foreach ($imgArray as $img) {
                if (Storage::disk('public')->exists($img)) {
                    // delete
                    Storage::disk('public')->delete($img);
                }
            }
        }
        $building->delete();
        return back();
    }
}
