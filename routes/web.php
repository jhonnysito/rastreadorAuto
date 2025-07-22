<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComandoController;
use App\Http\Controllers\UbicacionController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/comando', [ComandoController::class, 'store']); // desde la app
Route::get('/comando', [ComandoController::class, 'obtenerUltimoPendiente']); // ESP32 consulta
Route::post('/ubicacion', [UbicacionController::class, 'store']); // ESP32 envía ubicación