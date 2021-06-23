<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table='shipment_states';

    public function cities(){
        return $this->hasMany('App\City','state_id','id');
    }

}
