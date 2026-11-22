<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'norificacion';
    protected $primaryKey = 'id_notificacion';
    public $timestamps = false;
    protected $fillable = [
        'mensaje',
        'fecha',
        'leida',
        'id_tipo_notificacion',
        'no_documento'
    ];

    public function Tipo_notificacion()
    {
        return $this->belongsTo(Tipo_notificacion::class, 'id_tipo_notificacion', 'id_tipo_notificacion');
    }

    public function Usuario(){
        return $this->belongsTo(Usuario::class, 'no_documento', 'no_documento');
    }

}
