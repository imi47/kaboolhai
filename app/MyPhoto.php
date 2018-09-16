<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyPhoto extends Model
{
   protected $primaryKey = 'photo_id';
    protected $table = 'my_photos';
}
