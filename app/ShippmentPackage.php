<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippmentPackage extends Model
{
//    protected $with=['category'];

    protected $guarded = [''];


    public function category(){
        return $this->belongsTo('App\Models\Admin\Setting\PackageType','package_category_id');
    }
}
