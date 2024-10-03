<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    public $timestamps = false;
    public function promocion()
    {
        //Nuevo cambio chavalin aceptame
        return $this->belongsTo(Promocion::class, 'id_promocion');
    }
    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'id_rubro');
    }
}
