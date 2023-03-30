<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Region;

// class RegionController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $regiones = Region::all();
//         return $regiones;
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $region = New Region();
//         $region->nombre = $request->nombre;
//         $region->save();
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         $region = Region::find($id);
//         return $region;
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $region = Region::find($id);
//         $region->nombre = $request->nombre;
//         $region->save();

//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $region = Region::destroy($id);
//         return $region;
//     }
// }

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regiones = Region::all();
        return response()->json($regiones);
    }

    public function show($id)
    {
        $region = Region::findOrFail($id);
        return response()->json($region);
    }

    public function store(Request $request)
    {
        $region = new Region();
        $region->nombre = $request->input('nombre');
        $region->save();
        return response()->json($region, 201);
    }

    public function update(Request $request, $id)
    {
        $region = Region::findOrFail($id);
        $region->nombre = $request->input('nombre');
        $region->save();
        return response()->json($region);
    }

    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        $region->delete();
        return response()->json(null, 204);
    }
}

