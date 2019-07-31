<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reject extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'rejects';

    public function user()
    {
    	return $this->belongsTo('App\User','reject_user_id','id');
    }
     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','reject_user_id');
    }
}
