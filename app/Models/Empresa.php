<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'id_empresa';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'NIT',
        'telefono',
        'correo',
        'direccion',
        'estado'
    ];

    protected function Convenio()
    {
        return $this->hasMany(Convenio::class);
    }
}
