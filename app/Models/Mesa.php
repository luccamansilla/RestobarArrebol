<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $table = "mesa";
    protected $primaryKey = 'nro_mesa';

    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'nro_mesa');
    }
    public function zona()
    {
        return $this->belongsTo(Zona::class, 'id_zona');
    }
}
