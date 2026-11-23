<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Bahia;
use App\Models\Vehiculo;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::with('bahia.parqueadero', 'usuario')->get();

        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bahias = Bahia::with('parqueadero')->where('estado', 'disponible')->get();

        return view('reservas.create', compact('bahias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_ingreso' => 'required|date',
            'hora_ingreso' => 'required',
            'no_documento' => 'required|exists:usuario,no_documento',
            'placa' => 'required|exists:vehiculo,placa',
            'id_bahia' => 'required|exists:bahia,id_bahia'
        ]);

        Reserva::create([
            'fecha_reserva' => now(),
            'fecha_ingreso' => $request->fecha_ingreso,
            'hora_ingreso' => $request->hora_ingreso,
            'no_documento' => $request->no_documento,
            'placa' => $request->placa,
            'id_bahia' => $request->id_bahia
        ]);

        return redirect()->route('reservas.index')
                         ->with('success', '¡Reserva creada y vinculada al parqueadero exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva = Reserva::findOrFail($id);

        $reserva->delete();

        return redirect()->route('reservas.index')
                           ->with('success', '¡Reserva cancelada Correctamente!');
    }
}
