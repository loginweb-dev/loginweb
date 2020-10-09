<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleAsiento extends Model
{
    protected $fillable=['fecha','code','name','glosa','debe','haber','tipo','asiento_id','cuenta_id'];

    public function cuenta() {
        return $this->belongsTo(DetalleCuenta::class,'cuenta_id');
    }
}
