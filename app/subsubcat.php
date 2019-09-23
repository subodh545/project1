<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subsubcat extends Model
{
    public function subcategory(){

        return $this->belongsTo('App\subcategories');
    }

    public function product(){

        return $this->hasMany('App\products');
    }

}
