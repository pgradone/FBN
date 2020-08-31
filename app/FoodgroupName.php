<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodgroupName extends Model
{

  public $incrementing = false;
  protected $table = 'foodgroup_names';
  // protected $primaryKey = 'foodgroup_id';
  public function language()
  {
    return $this->belongsTo('App\Language');
  }

  public function food_group()
  {
    return $this->belongsTo('App\Foodgroup');
  }
}
