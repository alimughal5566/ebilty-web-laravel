<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVehicle extends Model
{
    protected $fillable = ['user_id', 'category_id', 'vehicle_id','status','is_verified','vehicle_number'];


    public function vehicle()
    {
        return $this->hasOne('App\Models\Admin\Setting\Vehicle','id','vehicle_id');
    }
    public function vehicle_category()
    {
        return $this->hasOne('App\Models\Admin\Setting\VehicleCategory','id','category_id');
    }

}
