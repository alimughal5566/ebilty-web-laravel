<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shippment extends Model
{
    public function sender()
    {
        return $this->hasOne('App\UserAddress','id','sender_address_id');
    }
    public function receiver(){
        return $this->hasOne('App\UserAddress','id','receiver_address_id');
    }

    public function status(){
        return $this->hasOne('App\ShipmentStatus','id','status_id');
    }
    public function bids(){
        return $this->hasMany('App\ShipmentBids','shipment_id','id');
    }
}
