<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='shipment_countries';

    public function states()
    {
        return $this->hasMany('App\State');
    }
}
