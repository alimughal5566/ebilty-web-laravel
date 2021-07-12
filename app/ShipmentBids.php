<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentBids extends Model
{
    protected $table="shipment_bids";
    protected $with = ['shipment'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function shipment()
    {
        return $this->belongsTo('App\Shippment','shipment_id','id');
    }
}
