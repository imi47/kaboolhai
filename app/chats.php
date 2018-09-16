<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chats extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'chats';
    public $timestamps = false;

    public function from_users()
    {
    	return $this->belongsTo('App\User','from_user','id');
    }
     public function to_users()
    {
    	return $this->belongsTo('App\User','to_user','id');
    }
     public function photo()
    {
        return $this->hasOne('App\MyPhoto','user_id','from_user');
    }
    public function to_photo()
    {
        return $this->hasOne('App\MyPhoto','user_id','to_user');
    }
    
}
