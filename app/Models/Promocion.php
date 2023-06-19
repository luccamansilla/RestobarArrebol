<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocion';
    protected $primaryKey = 'id_promocion';
    public $timestamps = false;
    public function rubros()
    {
        return $this->hasMany(Rubro::class, 'id_promocion');
    }
    public function productos()
    {
        return $this->hasMany(Productos::class, 'id_promocion');
    }
    public function tipo_promocion()
    {
        return $this->belongsTo(TipoPromocion::class, 'id_tipo_promocion');
    }
}
