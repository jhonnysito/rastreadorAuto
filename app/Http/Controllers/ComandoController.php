<?php

namespace App\Http\Controllers;

use App\Models\Comando;
use Illuminate\Http\Request;

class ComandoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'accion' => 'required|string'
        ]);

        $comando = Comando::create([
            'accion' => $request->accion,
            'estado' => 'pendiente'
        ]);

        return response()->json(['mensaje' => 'Comando registrado', 'comando' => $comando]);
    }

    public function obtenerUltimoPendiente()
    {
        $comando = Comando::where('estado', 'pendiente')->latest()->first();

        if ($comando) {
            $comando->estado = 'ejecutado';
            $comando->save();

            return response()->json(['accion' => $comando->accion]);
        }

        return response()->json(['accion' => 'ninguno']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comando $comando)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comando $comando)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comando $comando)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comando $comando)
    {
        //
    }
}
