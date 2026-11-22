<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial_bahia extends Model
{
    protected $table = 'historial_bahia';
    protected $primaryKey = 'id_historial_bahia';
    public $timestamps = false;

    protected $fillable = [
        'id_bahia',
        'estado_anterior',
        'estado_nuevo',
        'fecha_cambio'
    ];

    public function bahia()
    {
        return $this->belongsTo(Bahia::class, 'id_bahia', 'id_bahia');
    }
}
