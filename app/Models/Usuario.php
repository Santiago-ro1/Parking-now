<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'no_documento';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'no_documento',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'tipo_documento',
        'fecha_nacimiento',
        'id_genero',
        'id_cuenta',
        'id_direccion',
        'id_rol'
    ];

    public function Genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id_genero');
    }
    
    public function Cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'id_cuenta', 'id_cuenta');
    }

    public function Direccion()
    {
        return $this->belongsTo(Direccion::class, 'id_direccion', 'id_direccion');
    }

    public function Rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol', 'id_rol');
    }

    public function Reserva()
    {
        return $this->hasMany(Reserva::class);
    }

    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }
    public function Notificacion()
    {
        return $this->hasMany(Notificacion::class);
    }
    public function Pqrs()
    {
        return $this->hasMany(Pqrs::class);
    }
    public function Reseña()
    {
        return $this->hasMany(Reseña::class);
    }
}
