<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewUser extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'view_users';

    public function user()
    {
    	return $this->belongsTo('App\User','viewed_user_id','id');
    }
     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','viewed_user_id');
    }
}
