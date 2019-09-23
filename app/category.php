<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function subcategories(){

        return $this->hasMany('App\subcategories');
    }
}
