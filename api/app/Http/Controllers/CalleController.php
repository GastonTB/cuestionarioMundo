<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calle;
use App\Models\Ciudad;
use App\Models\Provincia;
use App\Models\Region;



class CalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calles = Calle::with('ciudad.provincia.region')->get();
        return $calles;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $calle = New Calle();
        $calle->nombre = $request->nombre;
        $ciudad = Ciudad::findOrFail($request->ciudad_id);
        $calle->ciudad_id = $ciudad->id;
        $calle->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $calle = Calle::findOrFail($id);
        $calle = Calle::where('id', $id)->with('ciudad.provincia.region')->first();
        $provincias = Provincia::where('region_id', $calle->ciudad->provincia->region_id)->get();
        $ciudades = Ciudad::where('provincia_id', $calle->ciudad->provincia_id)->get();
        $region = Region::where('id', $calle->ciudad->provincia->region_id)->first();
        $data = [
            'calle' => $calle,
            'provincias' => $provincias,
            'ciudades' => $ciudades,
            'region' => $region->id,
        ];
        return $data;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $calle = Calle::findOrFail($id);
        $calle->nombre = $request->nombre;
        $ciudad = Ciudad::findOrFail($request->ciudad_id);
        $calle->ciudad_id = $ciudad->id;
        $calle->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $calle = Calle::destroy($id);
        return $calle;
    }
}
