<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuenta';
    protected $primaryKey = 'id_cuenta';
    public $timestamps = false;

    protected $fillable = [
        'correo_electronico',
        'contrasena'
    ];

    protected $hidden = [
        'contrasena'
    ];

    protected function casts(): array
    {
        return [
            'contrasena' => 'hashed', // <-- ¡Esto encripta la contraseña automáticamente!
        ];
    }
}
