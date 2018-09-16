<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyNotes extends Model
{
     protected $primaryKey = 'notes_id';
    protected $table = 'mynotes';
}
