<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
   protected $table = 'answers';
   protected $primaryKey = 'answer_id';

      public function question()
      {
      	return $this->belongsTo('App\Question','question_id','question_id');
      }
}
