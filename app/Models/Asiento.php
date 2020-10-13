<?php

namespace App\Models;
use App\Helper\HasManyRelation;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    use HasManyRelation;

    protected $fillable=['user_id','ufv','tipo_cambio','glosa','total_haber','total_debe','comprobante','estado_id'];
    protected $with = ['items'];

    public function user(){
     return $this->belongsTo(\App\User::class);
    }

    public function items()
    {
        return $this->hasMany(DetalleAsiento::class);
    }

    public function estado () {
        return $this->belongsTo(Estado::class);
    }
}
