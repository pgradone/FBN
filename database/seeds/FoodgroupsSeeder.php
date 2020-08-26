<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FoodgroupsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    // get data from json file
    $data = File::get("database/seeds/json/foodgroups.json");
    // foodgroups array from json
    $foodgroups = json_decode($data, true);

    // fill the foodgroups from foodgroups array
    foreach ($foodgroups as $foodgroup) {
      DB::table('foodgroups')->insert([
        'id' => $foodgroup['id'],
        'parent_group_id' => $foodgroup['parent_group_id'],
      ]);
    }
  }
}
