<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyProfileViewed extends Model
{
     protected $primaryKey = 'myprofile_id';
     protected $table = 'myprofileviewds';

     public function user()
     {
     	return $this->belongsTo('App\User','myprofile_user_id','id');
     }
     public function users()
     {
        return $this->belongsTo('App\User','user_id','id');
     }
     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','myprofile_user_id');
    }
}
