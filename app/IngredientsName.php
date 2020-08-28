<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientsName extends Model
{
    public $incrementing = false;
    protected $table = 'ingredients_names';

    public function ingredient()
    {
        $this->belongsTo('App\Ingredient');
    }

    public function language()
    {
        $this->belongsTo('App\Language');
    }
}
