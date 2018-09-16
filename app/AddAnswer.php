<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddAnswer extends Model
{
   protected $table = 'addanswers';
   protected $primaryKey = 'add_answer_id';

      public function user()
      {
      	return $this->belongsTo('App\User','ans_user_id','id');
      }
      public function photo()
    {
        return $this->hasOne('App\MyPhoto','user_id','ans_user_id');
    }
    public function avt_photo()
    {
    	return $this->hasOne('App\MyPhoto','user_id','ans_user_id');
    }
}
