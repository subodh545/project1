<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    public function user(){

        return $this->belongsTo('App\users');
    }    

    public function subsubcat()
    {

        return $this->belongsTo('App\subsubcats');
    }
}
