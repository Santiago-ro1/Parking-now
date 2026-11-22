<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelo';
    protected $primaryKey = 'id_modelo';
    public $timestamps = false;

    protected $fillable = [
        'marca',
        'linea',
        'anio'
    ];



    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
