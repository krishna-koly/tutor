<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    //


     use SoftDeletes;

    public function studentclasses(){

        return $this->belongsToMany('App\StudentClass')->withTimestamps();
   
    }
}
