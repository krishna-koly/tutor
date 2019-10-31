<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentClass extends Model
{
    //
    use SoftDeletes;

    public function subjects(){

        return $this->hasmany('App\Subject');
   
    }
}
