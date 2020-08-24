<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $languages = array(
      array(
        'id' => 1,
        'iso' => 'LU',
        'name' => 'luxembourg',
      ),
      array(
        'id' => 2,
        'iso' => 'EN',
        'name' => 'united-kingdom',
      ),
      array(
        'id' => 3,
        'iso' => 'FR',
        'name' => 'france',
      ),
      array(
        'id' => 4,
        'iso' => 'DE',
        'name' => 'germany',
      ),
      array(
        'id' => 5,
        'iso' => 'PO',
        'name' => 'portugal',
      ),
      array(
        'id' => 6,
        'iso' => 'IT',
        'name' => 'italy',
      ),
      array(
        'id' => 7,
        'iso' => 'ES',
        'name' => 'spain',
      ),
      array(
        'id' => 8,
        'iso' => 'NL',
        'name' => 'netherlands',
      ),
    );

    foreach ($languages as $language) {
      DB::table('languages')->insert([
        'id' => $language['id'],
        'iso' => $language['iso'],
        'name' => $language['name'],
      ]);
    }
  }
}
