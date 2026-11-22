<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_vehiculo extends Model
{
    protected $table = 'tipo_de_vehiculo';
    protected $primaryKey = 'id_tipo_vehiculo';
    public $fillable = [
        'tipo_vehiculo'
    ];
    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
