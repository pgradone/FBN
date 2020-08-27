<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodgroupName extends Model
{
    public function language() {
        $this->belongsTo('App\Language');
    }

    public function food_group () {
        $this->belongsTo('App\Foodgroup')
    }
}
