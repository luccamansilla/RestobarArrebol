<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use App\Models\Mesa;
use App\Models\Productos;
use App\Models\Promocion;
use App\Models\Reserva;
use App\Models\Rubro;
use App\Models\Zona;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;

class HomeController extends Controller
{
    public function index()
    {
        $zonas = Zona::all();
        $horarios = Horarios::all();
        $dia = new DateTime('tomorrow');
        $mañana = $dia->format('Y-m-d');
        $productos = Productos::orderBy('id_rubro')->get();
        $rubros = Rubro::orderBy('id_rubro')->get();

        return view('home', compact('zonas', 'horarios', 'mañana', 'productos', 'rubros'));
        // return view('home');
    }
    public function zonasFecha(Request $request)
    {
        $output = "";
        $cantidadPersonasPorZona = DB::table('reserva')
            ->select('zona.id AS zona_id', 'zona.nombre AS zona_nombre', DB::raw('SUM(reserva.cantidad_personas) AS cantidad_personas_reservadas'))
            ->join('zona', 'reserva.id_zona', '=', 'zona.id')
            ->where('reserva.fecha', $request->fecha)
            ->where('reserva.id_hora', $request->horario)
            ->groupBy('zona_id', 'zona_nombre')
            ->get();
        $zonas = Zona::all();
        $output .= '<option value="0" name="0">Seleccionar una zona</option>';
        $cantidadZonas = 0;
        foreach ($zonas as $zona) {
            $capacidadZona = $zona->cantidadZona($zona->id);
            // Busca la zona correspondiente en los resultados de cantidad de personas por zona
            $zonaReservada = $cantidadPersonasPorZona->firstWhere('zona_id', $zona->id);
            if ($zonaReservada) {
                $personasReservadas = $zonaReservada->cantidad_personas_reservadas;
            } else {
                $personasReservadas = 0;
            }
            // Compara la capacidad de la zona con la cantidad de personas reservadas
            if ($capacidadZona > $personasReservadas) {
                // Agrega la zona al arreglo de zonas filtradas
                // $zonasFiltradas[] = $zona;
                $restante = $capacidadZona - $personasReservadas;
                if ($restante > 8) {
                    $restante = 8;
                }
                $output .= '<option value="' . $zona->id . '" name="' . $restante . '">' . $zona->nombre . '</option>';
                $cantidadZonas = $cantidadZonas + 1;
            }
        }
        if ($cantidadZonas == 0) {
            $output = '<option value="0" name="0">Sin disponibilidad.</option>';
        }
        return response($output);
    }
}
