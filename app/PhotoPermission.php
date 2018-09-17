<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoPermission extends Model
{
    protected $primaryKey = 'permission_id';
    protected $table = 'phptopermissions';

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    	 // return $this->belongsTo('App\User','favourite_user_id','id');
    }
    public function users()
    {
    	return $this->belongsTo('App\User','permission_user_id','id');
    }

     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','user_id');
    }

     public function photos()
    {
    	return $this->hasOne('App\MyPhoto','user_id','permission_user_id');
    }
    
}
