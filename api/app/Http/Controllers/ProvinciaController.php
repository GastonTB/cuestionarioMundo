<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Provincia;
// use App\Models\Region;

// class ProvinciaController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $provincias = Provincia::all();
//         return $provincias;
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $provincia = New Provincia();
//         $provincia->nombre = $request->nombre;
//         $region = Region::find($request->region_id);
//         $provincia->region_id = $region->id;
//         $provincia->save();
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         $provincia = Provincia::find($id);
//         return $provincia;
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $provincia = Provincia::find($id);
//         $provincia->nombre = $request->nombre;
//         $region = Region::find($request->region_id);
//         $provincia->region_id = $region->id;
//         $provincia->save();
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $provincia = Provincia::destroy($id);
//         return $provincia;
//     }
// }
namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function index()
    {
        $provincias = Provincia::all();
        return response()->json($provincias);
        // $region_id = $request->query('region');

        // if ($region_id) {
        //     $provincias = Provincia::where('region_id', $region_id)->get();
        // } else {
        //     $provincias = Provincia::all();
        // }

        // return response()->json($provincias);

    }

    public function show($id)
    {
        $provincia = Provincia::findOrFail($id);
        return response()->json($provincia);
    }

    public function store(Request $request)
    {
        $provincia = new Provincia();
        $provincia->nombre = $request->input('nombre');
        $provincia->region_id = $request->input('region_id');
        $provincia->save();
        return response()->json($provincia, 201);
    }

    public function update(Request $request, $id)
    {
        $provincia = Provincia::findOrFail($id);
        $provincia->nombre = $request->input('nombre');
        $provincia->region_id = $request->input('region_id');
        $provincia->save();
        return response()->json($provincia);
    }

    public function destroy($id)
    {
        $provincia = Provincia::findOrFail($id);
        $provincia->delete();
        return response()->json(null, 204);
    }
}
