<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','profile_image','country_id','state_id','city_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function assignedShipments(){
        return $this->hasMany('App\Shippment','assigned_to','id');
    }
    public function shipments(){
        return $this->hasMany('App\Shippment','user_id','id');
    }

    public function country(){
        return $this->belongsTo('App\Country','country_id','id');
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
