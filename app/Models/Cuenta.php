<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $fillable =['code','name'];

    public function detalle(){
       return $this->hasMany(DetalleCuenta::class);
    }
}
