<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $primaryKey = 'notification_id';
     protected $table = 'notifications';


 public function user()
    {
    	return $this->hasOne('App\User','id','sender_id');
    }
    public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','sender_id');
    }
}