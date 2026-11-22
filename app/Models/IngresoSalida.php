<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngresoSalida extends Model
{
    protected $table = 'ingreso_salida';
    protected $primaryKey = 'id_ingreso_salida';
    public $timestamps = false;

    protected $fillable = [
        'fecha_hora_entrada_real',
        'fecha_hora_salida_real'
    ];

    public function Reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
