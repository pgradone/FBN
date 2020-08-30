<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Recipe;

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
      Recipe::insert([
        'id' => $recipe['id'],
        'author_id' => $recipe['author_id'],
        'language_id' => $recipe['language_id'],
        'title' => $recipe['title'],
        'body' => $recipe['body'],
        'slug' => $recipe['slug'],
        'cover_image' => $recipe['cover_image'],
        'active' => $recipe['active'],
        'summary' => $recipe['summary'],
        'reference' => $recipe['reference'],
        'status' => $recipe['status'],
        'created_at' => $recipe['created_at'],
        'updated_at' => $recipe['updated_at'],
      ]);
    }
  }
}
