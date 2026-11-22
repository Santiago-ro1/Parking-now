<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metodo_pago extends Model
{
    protected $table = 'id_metodo_pago';
    protected $primaryKey = 'id_metodo_pago';
    public $timestamps = false;

    protected $fillable = [
        'tipo_pago'
    ];
}
