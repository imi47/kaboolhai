<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HidePrifile extends Model
{
     protected $primaryKey = 'hideprofile_id';
     protected $table = 'hide_profiles';

     public function user()
     {
     	return $this->belongsTo('App\User','hide_user_id','id');
     }
     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','hide_user_id');
    }
}
