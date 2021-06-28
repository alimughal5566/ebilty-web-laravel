<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function state()
    {
        return $this->belongsTo('App\State','state_id','id');
    }
    public function city()
    {
        return $this->belongsTo('App\City','city_id','id');
    }



}
