<?php

namespace App\Models\Admin\Setting;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function vehicle_category(){
        return $this->belongsTo(VehicleCategory::class, 'vehicle_category_id', 'id');
    }
}
