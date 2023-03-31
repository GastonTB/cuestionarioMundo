<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index()
    {
        $ciudades = Ciudad::all();
        return response()->json($ciudades);
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
        return response()->json($ciudad);
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
