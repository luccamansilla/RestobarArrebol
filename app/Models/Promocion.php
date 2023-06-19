<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocion';
    protected $primaryKey = 'id_promocion';
    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'id_rubro');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'cod_producto');
    }
    public function tipo_promocion()
    {
        return $this->belongsTo(TipoPromocion::class, 'id_tipo_promocion');
    }
}
