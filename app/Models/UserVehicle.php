<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVehicle extends Model
{
    protected $fillable = ['user_id', 'category_id', 'vehicle_id'];
}
