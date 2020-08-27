<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodgroup extends Model
{
    public function names() {
        return $this->hasMany('App\FoodgroupName');
    }

    public function ingredients() {
        return $this->hasMany('App\Ingredient');
    }

}
