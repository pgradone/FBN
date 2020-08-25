<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
    // get data fron json file
    $data = File::get("database/seeds/json/ingredients.json");

    // ingredients array from json
    $ingredients = json_decode($data, true);

    // fill the foodgroup names from foodgroup_names array
    foreach ($ingredients as $ingredient) {
      DB::table('ingredients')->insert([
        'id' => $ingredient['id'],
        'origin' => $ingredient['origin'],
        'nutriscore' => $ingredient['nutriscore'],
        'picture' => $ingredient['picture'],
        'foodgroup_id' => $ingredient['foodgroup_id'],
      ]);
    }
    }
}
