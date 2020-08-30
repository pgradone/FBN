<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Post;

class RecipeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // get data fron json file
    $data = File::get("database/seeds/json/recipes.json");

    // recipes array from json
    $recipes = json_decode($data, true);

    // fill the foodgroup names from foodgroup_names array
    foreach ($recipes as $recipe) {
      Post::insert([
        'id' => $recipe['id'],
        'author_id' => $recipe['author_id'],
        'origin' => $recipe['origin'],
        'origin' => $recipe['origin'],
        'origin' => $recipe['origin'],
        'origin' => $recipe['origin'],
        'origin' => $recipe['origin'],
        'origin' => $recipe['origin'],
        'nutriscore' => $recipe['nutriscore'],
        'picture' => $recipe['picture'],
        'foodgroup_id' => $recipe['foodgroup_id'],
      ]);
    }
  }
}
