<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccion';
    protected $primaryKey = 'id_parqueadero';
    public $timestamps = false;
    protected $fillable = [
        'direccion',
        'latitud',
        'longitud',
        'id_barrio'
    ];
    public function Direccion()
    {
        return $this->belongsTo(Barrio::class, 'id_barrio', 'id_barrio');
    }
    public function Parqueadero()
    {
        return $this->hasMany(Parqueadero::class);
    }
    public function Usuario()
    {
        return $this->hasMany(Usuario::class);
    }
}
