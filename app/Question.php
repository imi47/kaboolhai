<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Question extends Model
{
    protected $primaryKey = 'question_id';
    protected $table = 'questions';

     public function answer()
	{
	    return $this->belongsTo('App\Answer' ,'question_id','question_id');
	}
}
