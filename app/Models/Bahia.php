<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahia extends Model
{
    Protected $table = 'ingresosalida';
    protected $primaryKey = 'id_bahia';
    public $timestamps = false;

    protected $fillable = [
        'estado',
        'id_tipo_bahia',
        'id_parqueadero'
    ];

    //foreign keys
    public function tipo_bahia()
    {
        return $this->belongsTo(Tipo_Bahia::class, 'id_tipo_bahia', 'id_tipo_bahia');
    }
    public function id_parqueadero()
    {
        return $this->belongsTo(Parqueadero::class, 'id_parqueadero', 'id_parqueadero');
    }
}
