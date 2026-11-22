<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comprobantes extends Model
{
    protected $table = 'comprobantes';
    protected $primaryKey = 'id_comprobante';
    public $timestamps = false;

    protected $fillable = [
        'informacion',
        'fecha',
        'valor',
        'id_pago'
    ];

    public function Pago()
    {
        return $this->belongsTo(Pago::class, 'id_pago', 'id_pago');
    }
}
