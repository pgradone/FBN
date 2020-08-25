<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTypesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $types = array(
      array(
        'id' => 1,
        // 'parent_type_id' => 1,
        'name' => 'post',
      ),
      array(
        'id' => 2,
        // 'parent_type_id' => 1,
        'name' => 'quote',
      ),
      array(
        'id' => 3,
        // 'parent_type_id' => 1,
        'name' => 'opinion',
      ),
      array(
        'id' => 4,
        // 'parent_type_id' => 1,
        'name' => 'question',
      ),
      array(
        'id' => 5,
        'parent_type_id' => 4,
        'name' => 'faq',
      ),
      array(
        'id' => 6,
        'parent_type_id' => 1,
        'name' => 'recipe',
      ),
      array(
        'id' => 7,
        // 'parent_type_id' => 1,
        'name' => 'ad',
      ),
      array(
        'id' => 8,
        // 'parent_type_id' => 1,
        'name' => 'article',
      ),
      array(
        'id' => 9,
        'parent_type_id' => 8,
        'name' => 'news',
      ),
      array(
        'id' => 10,
        'parent_type_id' => 8,
        'name' => 'science',
      ),
    );

    foreach ($types as $type) {
      if (!isset($type['parent_type_id'])) {
        DB::table('post_types')->insert([
          'id' => $type['id'],
          // 'parent_type_id' => $type['parent_type_id'],
          'name' => $type['name'],
        ]);
      } else {
        DB::table('post_types')->insert([
          'id' => $type['id'],
          'parent_type_id' => $type['parent_type_id'],
          'name' => $type['name'],
        ]);
      }
      
    }
  }
}
