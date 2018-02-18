<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //

	protected $fillable = [
        'name', 'cost', 'description','category_id','user_id','school','location','policies','hffree','hfgeneral','hfservices','hffoodndrink'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    


    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function photos(){
        return $this->hasMany(Photo::class);
    }
    
}
