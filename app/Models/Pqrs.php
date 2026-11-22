<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    protected $table = 'pqrs';
    protected $primaryKey = 'id_pqrs';
    protected $fillable = [
        'tipo',
        'asunto',
        'descripcion',
        'fecha',
        'estado',
        'no_documento'
    ];

    public function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'no_documento', 'no_documento');
    }
}
