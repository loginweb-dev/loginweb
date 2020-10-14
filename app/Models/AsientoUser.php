<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsientoUser extends Model
{
    protected $table = 'asiento_user';
    protected $fillable =['observacion','asiento_id','user_id','estado_id'];
    protected $with = ['user:id,name','estado:id,name'];

    public function user(){
        return $this->belongsTo(\App\User::class);
    }
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
}
