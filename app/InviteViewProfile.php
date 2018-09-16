<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InviteViewProfile extends Model
{
     protected $primaryKey = 'inviteprofile_id';
     protected $table = 'inviteviewprofiles';

     public function user()
     {
     	return $this->belongsTo('App\User','inviteprofile_user_id','id');
     }
     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','inviteprofile_user_id');
    }
}
