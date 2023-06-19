<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reserva';
    // protected $primaryKey = 'nro_reserva';
    public function mesa()
    {
        //Uno a muchos inversa
        return $this->belongsTo(Mesa::class, 'nro_mesa');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
