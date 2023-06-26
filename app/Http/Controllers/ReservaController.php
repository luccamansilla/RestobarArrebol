<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use App\Models\Mesa;
use App\Models\Reserva;
use App\Models\Zona;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zonas = Zona::all();
        $horarios = Horarios::all();
        $dia = new DateTime('tomorrow');
        $mañana = $dia->format('Y-m-d');
        $nombre = Auth::user()->name;
        return view('reservas.realizarReserva', compact('zonas', 'horarios', 'mañana', 'nombre'));
    }
    public function mesasZona(Request $request)
    {
        $output = "";
        $mesas = Mesa::where('id_zona', '=', $request->zona)->get();
        foreach ($mesas as $mesa) {
            $output .= '<option id="' . $mesa->nro_mesa . '" value="' . $mesa->nro_mesa . '">' . $mesa->nro_mesa . '</option>';
        }
        return response($output);
    }
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
            "fecha" => "required",
            "zona" => "required",
            "hora" => "required",
            "cantidad" => "required",
        ]);

        //$nro_reserva = Reserva::all()->orderBy('id', 'desc')->first(); 

        $reserva = Reserva::create([
            'id_usuario' => Auth::user()->id,
            'cantidad_personas' => $request->cantidad,
            'id_zona' => $request->zona,
            'id_hora' => $request->hora,
            'fecha' => $request->fecha,
        ]);
        $reserva->save();
        return redirect()->route('reservas.inicio')->with('success', 'La reserva se realizo correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        // $reservas = Reserva::where('id_usuario', Auth::user()->id)->get();
        // $dia = new DateTime();
        // $hoy = $dia->format('Y-m-d');
        return view('reservas.indexReservas');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.inicio')->with('success', 'La reserva fue eliminada correctamente.');
    }
}
