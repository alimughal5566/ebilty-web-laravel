<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='shipment_cities';



    public function areas()
    {
        return $this->hasMany('App\ShipmentArea');
    }



}
