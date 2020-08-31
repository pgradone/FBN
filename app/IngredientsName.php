<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientsName extends Model
{
  public $incrementing = false;
  protected $table = 'ingredients_names';

  public function ingredient()
  {
    return $this->belongsTo('App\Ingredient');
  }

  public function language()
  {
    return $this->belongsTo('App\Language');
  }
}
