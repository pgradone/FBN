<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
  public function ingredient_names()
  {
    $this->hasMany('App\IngredientsName');
  }

  public function foodgroup_names()
  {
    return $this->hasMany('App\FoodgroupName');
  }

  public function users()
  {
    return $this->hasMany('App\User');
  }
}
