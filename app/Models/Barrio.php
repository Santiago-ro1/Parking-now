<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    protected $table = 'barrio';
    protected $primaryKey = 'id_barrio';
    public $timestamps = false;

    protected $fillable = [
        'nombre_barrio',
        'codigo_postal',
        'id_localidad'
    ];

    public function Direccion()
    {
        return $this->hasMany(Direccion::class);
    }
    public function Localidad()
    {
        return $this->belongsTo(Localidad::class, 'id_localidad', 'id_localidad');
    }
}
