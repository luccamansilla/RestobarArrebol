<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPromocion extends Model
{
    use HasFactory;
    protected $table = 'tipo_promocion';
    protected $primaryKey = 'id_tipo_promocion';
    public $timestamps = false;

    public function promociones()
    {
        return $this->hasMany(Promocion::class, 'id_tipo_promocion');
    }
}
