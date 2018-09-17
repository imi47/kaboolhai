<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavouriteUser extends Model
{
    protected $primaryKey = 'fav_id';
    protected $table = 'favouriteusers';

     public function user()
     {
        return $this->belongsTo('App\User','favourite_user_id','id');
     }

     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','favourite_user_id');
    }
     
}
