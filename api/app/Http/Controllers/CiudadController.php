<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Ciudad;
// use App\Models\Provincia;
// use App\Models\Region;

// class CiudadController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $ciudades = Ciudad::with('provincia.region')->get();
//         return $ciudades;
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $ciudad = New Ciudad();
//         $ciudad->nombre = $request->nombre;
//         $provincia = Provincia::find($request->provincia_id);
//         $ciudad->provincia_id = $provincia->id;
//         $ciudad->save();
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         $ciudad = Ciudad::find($id);
//         return $ciudad;
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $ciudad = Ciudad::find($id);
//         $ciudad->nombre = $request->nombre;
//         $provincia = Provincia::find($request->provincia_id);
//         $ciudad->provincia_id = $provincia->id;
//         $ciudad->save();
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $ciudad = Ciudad::destroy($id);
//         return $ciudad;
//     }
// }
namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index()
    {
        $ciudades = Ciudad::all();
        return response()->json($ciudades);

        // $provincia = $request->query('provincia');
        // $ciudades = Ciudad::where('provincia_id', $provincia)->get();
        // return response()->json($ciudades);

        //$provincia_id = $request->query('provincia');

        // if ($provincia_id) {
        //     $ciudades = Ciudad::where('provincia_id', $provincia_id)->get();
        // } else {
        //     $ciudades = Ciudad::all();
        // }

        //return response()->json($ciudades);
    }

    public function show($id)
    {
        $ciudad = Ciudad::with('provincia.region')->findOrFail($id);
        return response()->json($ciudad);
    }

    public function store(Request $request)
    {
        $ciudad = new Ciudad();
        $ciudad->nombre = $request->input('nombre');
        $ciudad->provincia_id = $request->input('provincia_id');
        $ciudad->save();
        return response()->json($ciudad, 201);
    }

    public function update(Request $request, $id)
    {
        $ciudad = Ciudad::findOrFail($id);
        $ciudad->nombre = $request->input('nombre');
        $ciudad->provincia_id = $request->input('provincia_id');
        $ciudad->save();
        return response()->json($ciudad);
    }

    public function destroy($id)
    {
        $ciudad = Ciudad::findOrFail($id);
        $ciudad->delete();
        return response()->json(null, 204);
    }
}
