<?php

namespace App\Http\Livewire;

use App\Models\Productos;
use App\Models\Rubro;
use Livewire\Component;

class ProductosIndex extends Component
{
    public $productos = null;
    protected $listeners = ['productos'];
    public function render()
    {
        return view('livewire.productos-index');
    }
    public function productos(Rubro $rubro){
        $this->productos = $rubro->productos;
    }
}
