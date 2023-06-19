<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    public function promocion()
    {
        return $this->hasOne(Promocion::class, 'cod_producto');
    }
    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'id_rubro');
    }
}
