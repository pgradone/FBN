<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $attributes = [
        'language_id' => 2,
    ];


    public function names()
    {
        return $this->hasMany('App\IngredientsName');
    }

    public function recipeContents()
    {
        return $this->hasMany('App\RecipeContent');
    }

    public function foodgroup()
    {
        return $this->belongsTo('App\Foodgroup');
    }
}
