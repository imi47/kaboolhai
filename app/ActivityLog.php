<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $primaryKey = 'activity_id';
    protected $table = 'activitylogs';
    public function otheruser()
    {
    	return $this->hasOne('App\User', 'id', 'activity_user_id');
    }

    public function activeuser()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
