<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentBids extends Model
{
    protected $table="shipment_bids";

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
