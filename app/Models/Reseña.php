<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    protected $table = 'reseña';
    protected $primaryKey = 'id_reseña';
    protected $fillable = [
        'comentario',
        'fecha',
        'calificacion',
        'no_documento',
        'id_reserva'
    ];

    public function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'no_documento', 'no_documento');
    }
    public function Reserva()
    {
        return $this->belongsTo(Reserva::class, 'id_reserva', 'id_reserva');
    }
}
