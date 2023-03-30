<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CalleController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(RegionController::class)->group(function() {
    Route::get('/regiones', 'index');
    Route::post('/region', 'store');
    Route::get('/region/{id}', 'show');
    Route::put('/region/{id}', 'update');
    Route::delete('/region/{id}', 'destroy');
});

Route::controller(ProvinciaController::class)->group(function() {
    Route::get('/provincias', 'index');
    Route::post('/provincia', 'store');
    Route::get('/provincia/{id}', 'show');
    Route::put('/provincia/{id}', 'update');
    Route::delete('/provincia/{id}', 'destroy');
});

Route::controller(CiudadController::class)->group(function() {
    Route::get('/ciudades', 'index');
    Route::post('/ciudad', 'store');
    Route::get('/ciudad/{id}', 'show');
    Route::put('/ciudad/{id}', 'update');
    Route::delete('/ciudad/{id}', 'destroy');
});

Route::controller(CalleController::class)->group(function() {
    Route::get('/calles', 'index');
    Route::post('/calle', 'store');
    Route::get('/calle/{id}', 'show');
    Route::put('/calle/{id}', 'update');
    Route::delete('/calle/{id}', 'destroy');
});
