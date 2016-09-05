<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FruitLog extends Model
{
    public function fruit() {
        return $this->belongsTo('App\Fruit');
    }
}
