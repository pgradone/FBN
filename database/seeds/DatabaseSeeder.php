<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Database\seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // $this->call(UserSeeder::class);
    $this->call(LanguageSeeder::class);
    $this->call(PostTypesSeeder::class);
    $this->call(UserRoleSeeder::class);
    $this->call(UserSeeder::class);
    $this->call(FoodgroupsSeeder::class);
    $this->call(Foodgroup_nameSeeder::class);
    $this->call(IngredientSeeder::class);
    $this->call(Ingredients_nameSeeder::class);
  }
}
