<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    //

    use SoftDeletes; //add this line



    public function areas(){


        return $this->hasMany('App\Area');
    }


    public function tutorregisters(){


        return $this->hasMany('App\TutorRegister');
    }
}
