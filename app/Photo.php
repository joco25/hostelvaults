<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path','property_id','room_id'
    ];

  protected $uploads = "{{asset('images/')}}";

	public function getPathAttribute($photo){
		return $this->uploads. $photo;
	}

	public function property(){
		return $this->belongsTo(Property::class);
	}
}
