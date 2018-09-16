<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestUpdate extends Model
{
   protected $primaryKey = 'update_id';
     protected $table = 'latestupdates';
}
