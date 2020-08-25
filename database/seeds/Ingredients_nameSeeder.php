<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Ingredients_nameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    // get ingredients name from json file

        // get data fron json file
        $data = File::get("database/seeds/json/ingredients_names.json");

        // foodgroup names array from json
        $ingredientsnames = json_decode($data, true);

        # code...
        // fill the foodgroup names from foodgroup_names array
        foreach ($ingredientsnames as $ingredientsname) {
          DB::table('ingredients_names')->insert([
            'ingredient_id' => $ingredientsname['ingredient_id'],
            'language_id' => $ingredientsname['language_id'],
            'name' => $ingredientsname['name'],
          ]);
        }
    }
}
