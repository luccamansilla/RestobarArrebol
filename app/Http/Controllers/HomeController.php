<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use App\Models\Mesa;
use App\Models\Productos;
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
        // $cantidadPersonasPorZona = Zona::all();
        // $zonas = Zona::all();
        // $vecPersonas = array();
        foreach ($cantidadPersonasPorZona as $cant) {
            // array_push($vecPersonas, $cant);
            $output .= '<option>' . $cant->zona_nombre . '' . $cant->cantidad_personas_reservadas . '</option>';
        }
        // foreach ($zonas as $zona) {
        //     if(){

        //     }
        //     $output .= '<option id="' . $mesa->nro_mesa . '" value="' . $mesa->nro_mesa . '">' . $mesa->nro_mesa . '</option>';
        // }
        return response($output);
    }
}
