<?php

namespace App\Http\Livewire;

use App\Models\Reserva;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Nette\Utils\DateTime;

class IndexReservas extends Component
{
    protected $listeners = ['delete'];
    public function render()
    {
        $reservas = Reserva::where('id_usuario', Auth::user()->id)->get();
        $dia = new DateTime();
        $hoy = $dia->format('Y-m-d');
        return view('livewire.index-reservas', compact('reservas', 'hoy'));
    }

    public function delete(Reserva $reserva)
    {
        $reserva->delete();
    }
}
