<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'convenio';
    protected $primaryKey = 'id_convenio';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'porcentaje_descuento',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'id_empresa'
    ];

    public function Empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id_empresa');
    }
    public function Historial()
    {
        return $this->hasMany(Historial_convenio::class);
    }
    public function Parqueadero_convenio()
    {
        return $this->hasMany(Parqueadero_convenio::class);
    }
}
