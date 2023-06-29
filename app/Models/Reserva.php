<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reserva';
    protected $fillable = [
        'id_usuario',
        'cantidad_personas',
        'id_zona',
        'id_hora',
        'fecha'
    ];
    // protected $primaryKey = 'nro_reserva';
    public function zona()
    {
        //Uno a muchos inversa
        return $this->belongsTo(Zona::class, 'id_zona');
    }
    public function horario()
    {
        return $this->belongsTo(Horarios::class, 'id_hora');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
