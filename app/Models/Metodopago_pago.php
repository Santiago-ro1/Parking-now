<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metodopago_pago extends Model
{
    protected $table = 'metodopago_pago';
    public $incrementing = false;
    protected $primaryKey = 'id_metodo_pago, id_pago';
    public $timestamps = false;

    public function Pago()
    {
        return $this->belongsTo(Pago::class, 'id_pago', 'id_pago');
    }

}
