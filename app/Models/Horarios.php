<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_hora');
    }
}
