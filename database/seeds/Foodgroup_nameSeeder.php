<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Foodgroup_nameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // get data fron json file
    $data = File::get("database/seeds/json/foodgroup_names.json");
  
    // foodgroup names array from json
    $foodgroupnames = json_decode($data, true);

    // fill the foodgroup names from foodgroup_names array
    foreach ($foodgroupnames as $foodgroupname) {
      DB::table('foodgroup_names')->insert([
        'foodgroup_id' => $foodgroupname['foodgroup_id'],
        'language_id' => $foodgroupname['language_id'],
        'name' => $foodgroupname['name'],
      ]);
    }
    }
}
