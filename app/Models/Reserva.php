<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    Protected $table = 'reserva';
    Protected $primaryKey = 'id_reserva';
    public $timestamps = false;

    //Campos que se llenar de forma masiva
    protected $fillable = [
        'fecha_reserva',
        'fecha_ingreso',
        'hora_ingreso',
        'no_documento',
        'placa',
        'id_bahia',
        'id_ingreso_salida'
    ];

    //foreign keys
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'no_documento', 'no_documento');
    }
    public function bahia()
    {
        return $this->belongsTo(Bahia::class, 'id_bahia', 'id_bahia');
    }
    public function Vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'placa', 'placa');
    }
    public function ingresoSalida()
    {
        return $this->belongsTo(IngresoSalida::class, 'id_ingreso_salida', 'id_ingreso_salida');
    }

    public function Pago()
    {
        return $this->hasMany(Pago::class);
    }

}
