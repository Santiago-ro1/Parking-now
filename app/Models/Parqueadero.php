<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    protected $table = 'parqueadero';
    protected $primaryKey = 'id_parqueadero';
    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
        'estado',
        'capacidad',
        'telefono',
        'hora_cierre',
        'hora_apertura',
        'id_direccion'
    ];

    public function id_direccion()
    {
        return $this->belongsTo(Direccion::class, 'id_direccion', 'id_direccion');
    }
}
