<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
   protected $primaryKey = 'request_id';
    protected $table = 'usersrequets';

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
    

    public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','user_id');
    }


}
