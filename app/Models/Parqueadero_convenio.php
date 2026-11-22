<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parqueadero_convenio extends Model
{
    protected $table = 'parqueadero_convenio';
    public $incrementing = false;
    protected $primaryKey = 'id_parqueadero, id_convenio';
    public $timestamps = false;

    public function Convenio()
    {
        return $this->belongsTo(Convenio::class, 'id_convenio', 'id_convenio');
    }

}
