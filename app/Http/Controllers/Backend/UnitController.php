<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    function index()
    {
        return view('backend.units.index');
    }
    function create()
    {
        $buildings = Building::where('user_id', auth()->id())->select('id', 'name')->get();

        return view('backend.units.create', compact('buildings'));
    }
}
