<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Room extends Model
{


	protected $fillable = [
        'name', 'cost', 'description','category_id','user_id','school','location','policies','rffurnished','hfprivatebath','hfwashingmachine','hfinternet','hftv','hfpets','hfsmoking','ppets','pcleanliness','psnoring','pgender','pchildren','pparty','page','psmoking'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function photos(){
        return $this->hasMany(Photo::class);
    }


    
}
