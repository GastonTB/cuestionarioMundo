<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function index()
    {
        $provincias = Provincia::all();
        return response()->json($provincias);

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
        return response()->json($provincia);
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
