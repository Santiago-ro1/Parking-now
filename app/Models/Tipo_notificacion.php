<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_notificacion extends Model
{
    protected $table = 'tipo_notificacion';
    protected $primaryKey = 'id_tipo_notificacion';
    public $timestamps = false;
    protected $fillable = [
        'tipo'
    ];

    public function Notificacion()
    {
        return $this->hasMany(Notificacion::class);
    }
}
