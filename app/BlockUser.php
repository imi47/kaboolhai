<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlockUser extends Model
{
    protected $primaryKey = 'block_id';
    protected $table = 'blockusers';

    public function user()
    {
    	return $this->belongsTo('App\User','block_user_id','id');
    }
     public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','block_user_id');
    }
}
