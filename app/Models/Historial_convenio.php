<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial_convenio extends Model
{
    protected $table = 'historial_convenio';
    protected $primaryKey = 'id_historial_convenio';
    public $timestamps = false;

    protected $fillable = [
        'id_convenio',
        'estado_anterior',
        'estado_nuevo',
        'fecha_cambio'
    ];

    public function Convenio()
    {
        return $this->belongsTo(Convenio::class, 'id_convenio', 'id_convenio');
    }
}
