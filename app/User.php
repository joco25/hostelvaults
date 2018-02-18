<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone', 'password','is_agent','photoname','property_id','room_id','pets','cleanliness','snoring','gender','children','party','dob','smoking'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function age() {
        return $this->dob->diff(Carbon::now())
         ->format('%y years, %m months and %d days');
     }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function photo(){
        return $this->belongsTo(Photo::class);
    }

    public function properties(){
        return $this->hasMany(Property::class);
    }

    public function room(){
        return $this->hasOne(Room::class);
    }

}
