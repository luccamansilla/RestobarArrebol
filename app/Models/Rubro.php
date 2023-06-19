<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;
    protected $table = 'rubros';
    protected $primaryKey = 'id_rubro';

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_rubro');
    }
    public function promociones()
    {
        return $this->hasMany(Promocion::class, 'id_rubro');
    }
}
