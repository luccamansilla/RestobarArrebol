<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;


class Rubro extends Model
{
    use HasFactory;
    protected $table = 'rubros';
    protected $primaryKey = 'id_rubro';
    public $timestamps = false;

    public function productos()
    {
        return $this->hasMany(Productos::class, 'id_rubro');
    }
    public function promocion()
    {
        return $this->belongsTo(Promocion::class, 'id_promocion');
    }
}
