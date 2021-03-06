<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shippment extends Model
{
    public function sender(){
        return $this->belongsTo('App\UserAddress','sender_address_id','id');
    }
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
    public function receiver(){
        return $this->belongsTo('App\UserAddress','receiver_address_id','id');
    }
    public function status(){
        return $this->hasOne('App\ShipmentStatus','id','status_id');
    }
    public function bids(){
        return $this->hasMany('App\ShipmentBids','shipment_id','id');
    }
    public function packages(){
        return $this->hasMany('App\ShippmentPackage','shippment_id');
    }
    public function myBid(){
        return $this->hasOne('App\ShipmentBids','shipment_id','id')->where('user_id',auth()->user()->id);
    }
    public function vehicleType(){
       return $this->hasOne('App\Models\Admin\Setting\VehicleCategory','id','vehicle_type_id');
    }
    public function vehicle(){
       return $this->hasOne('App\Models\Admin\Setting\Vehicle','id','vehicle_id');
    }
    public function assignedto(){
        return $this->hasOne('App\User','id','assigned_to');    }


}
