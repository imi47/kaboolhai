<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddQuestion extends Model
{
     protected $table = 'addquestions';
      protected $primaryKey = 'add_question_id';

      public function addquestion()
      {
      	return $this->belongsTo('App\Question','fk_question_id','question_id');
      }

      public function addanswer()
      {
      	return $this->hasMany('App\AddAnswer','question_id','fk_question_id');
      }

      
}
