<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidad';
    protected $primaryKey = 'id_localidad';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'ciudad'
    ];
}
