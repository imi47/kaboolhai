<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
      public function city()
	{
	    return $this->belongsTo('App\City' , 'city_id' , 'city_id');
	}
	public function image()
	{
		return $this->hasOne('App\ProfileImage' , 'image_id' , 'profile_image');	
	}

	

	
}
