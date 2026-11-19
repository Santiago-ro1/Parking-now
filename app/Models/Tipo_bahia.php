<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_bahia extends Model
{
    protected $table = 'tipo_bahia';
    protected $primaryKey = 'id_tipo_bahia';
    public $timestamps = false;

    protected $fillable = [
        'vehiculo'
    ];
}
