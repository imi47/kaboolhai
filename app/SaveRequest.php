<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveRequest extends Model
{
    protected $table = 'sendrequests';
      protected $primaryKey = 'request_id';
}
