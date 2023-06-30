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
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('not_zero', function ($attribute, $value, $parameters, $validator) {
            return $value != 0;
        });
        $request->validate([
            "id_usuario" => "required",
            "fecha" => "required",
            "zona" => "required|not_zero",
            "hora" => "required|not_zero",
            "cantidad_personas" => "required|not_zero",
        ], [
            "fecha.required" => "El campo fecha es obligatorio.",
            "fecha.not_zero" => "Seleccione una fecha.",
            "zona.required" => "El campo zona es obligatorio.",
            "zona.not_zero" => "Debe seleccionar una zona.",
            "hora.required" => "El campo hora es obligatorio.",
            "hora.not_zero" => "Seleccione un horario.",
            "cantidad_personas.required" => "El campo cantidad_personas es obligatorio.",
            "cantidad_personas.not_zero" => "El campo cantidad_personas no puede ser igual a cero."
        ]);
        $reserva = Reserva::create([
            'id_usuario' => $request->id_usuario,
            'cantidad_personas' => $request->cantidad_personas,
            'id_zona' => $request->zona,
            'id_hora' => $request->hora,
            'fecha' => $request->fecha
        ]);
        $reserva->save();
        return redirect()->route('home.inicio')->withFragment('reservation')->with('success', 'La reserva se ha generado correctamente. Puede entrar en el apartado mis reservas para visualizarla.');
        // return redirect()->route('home')->with('success', 'La reserva se realizó correctamente.');
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
    public function destroy(Request $request)
    {
        $reserva = Reserva::find($request->id);
        // dd($reserva);
        $reserva->delete();
        return redirect()->route('reservas.inicio')->with('success', 'La reserva fue eliminada correctamente.');
    }
}
