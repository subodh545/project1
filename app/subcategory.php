<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    public function categories(){

        return $this->belongsTo('App\categories');
    }

    public function subsubcat(){
        return $this->hasMany('App\subsubcats');
    }
}
