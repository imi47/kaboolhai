<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loking extends Model
{
    protected $primaryKey = 'loking_id';
    protected $table = 'lokings';


    public function states()
    {
    	return $this->hasMany('App\State' , 'loking_value' , 'state_id');
    }
}
