<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeleteRequest extends Model
{
    protected $primaryKey = 'delete_id';
    protected $table = 'deleterequests';
    public function user()
    {
    	return $this->belongsTo('App\User','delete_user_id','id');
    }
    

    public function photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','delete_user_id');
    }
}
