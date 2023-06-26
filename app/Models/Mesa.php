<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $table = "mesa";
    protected $primaryKey = 'nro_mesa';
    public $timestamps = false;


    public function zona()
    {
        return $this->belongsTo(Zona::class, 'id_zona');
    }
}
