<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    protected $primaryKey = 'id_pago';
    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'valor',
        'estado',
        'referencia_transaccion',
        'id_reserva'
    ];

    public function Reserva()
    {
        return $this->belongsTo(Reserva::class, 'id_reserva', 'id_reserva');
    }
    public function Comprobantes()
    {
        return $this->hasMany(Comprobantes::class);
    }
    public function Metodopago_pago()
    {
        return $this->hasMany(Metodopago_pago::class);
    }
}
