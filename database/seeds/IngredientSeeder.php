<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
    $data = ;

    // ingredients array from json
    $ingredients = json_decode($data, true);

    // fill the foodgroup names from foodgroup_names array
    foreach ($ingredients as $ingredient) {
      DB::table('ingredients')->insert([
        'id' => $ingredient['id'],
        'nutriscore' => $ingredient['nutriscore'],
        'origin' => $ingredient['origin'],
        'picture' => $ingredient['picture'],
        'foodgroup_id' => $ingredient['foodgroup_id'],
      ]);
    }
    }
}
