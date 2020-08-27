<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function ingredient_names() {
        $this->hasMany('App\IngredientsName');
    }

    public function foodgroup_names() {
        $this->hasMany('App\FoodgroupName');
    }

    public function users() {
        $this->hasMany('App\User');
    }
}
