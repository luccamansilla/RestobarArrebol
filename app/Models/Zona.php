<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;
    protected $table = 'zona';
    // protected $primaryKey = 'id_zona';
    public $timestamps = false;

    public function mesas()
    {
        return $this->hasMany(Mesa::class, 'id_zona');
    }
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_zona');
    }
}
