<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $primaryKey = 'placa';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'placa',
        'color',
        'id_tipo_vehiculo',
        'id_modelo',
        'id_estado',
        'no_documento'
    ];

    public function Tipo_vehiculo()
    {
        return $this->belongsTo(Tipo_vehiculo::class, 'id_tipo_vehiculo', 'id_tipo_vehiculo');
    }
    public function Modelo()
    {
        return $this->belongsTo(Modelo::class, 'id_modelo', 'id_modelo');
    }
    public function Usuario(){
        return $this->belongsTo(Usuario::class, 'no_documento', 'no_documento');
    }
    
    

    public function Reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
