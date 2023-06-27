<?php

namespace App\Http\Livewire;

use App\Models\Horarios;
use App\Models\Productos;
use App\Models\Rubro;
use App\Models\Zona;
use Livewire\Component;
use Nette\Utils\DateTime;

class Home extends Component
{
    public function render()
    {
        $zonas = Zona::all();
        $horarios = Horarios::all();
        $dia = new DateTime('tomorrow');
        $mañana = $dia->format('Y-m-d');
        $productos = Productos::orderBy('id_rubro')->get();
        $rubros = Rubro::orderBy('id_rubro')->get();
        return view('livewire.home',compact('zonas','horarios','mañana','productos','rubros'));
    }
}