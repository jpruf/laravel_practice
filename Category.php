<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function fruits(){
        return $this->belongsToMany('App\Fruit', 'categories_fruits');
    }
}
