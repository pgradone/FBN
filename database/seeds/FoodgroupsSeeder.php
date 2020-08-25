<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
    $data = [{"id":"1","parent_group_id":"1"}, {"id":"101","parent_group_id":"1"}, {"id":"103","parent_group_id":"1"}, {"id":"201","parent_group_id":"1"}, {"id":"301","parent_group_id":"1"}, {"id":"401","parent_group_id":"1"}, {"id":"501","parent_group_id":"1"}, {"id":"601","parent_group_id":"1"}, {"id":"701","parent_group_id":"1"}, {"id":"801","parent_group_id":"1"}, {"id":"901","parent_group_id":"1"}, {"id":"1001","parent_group_id":"1"}, {"id":"1101","parent_group_id":"1"}, {"id":"2","parent_group_id":"2"}, {"id":"102","parent_group_id":"2"}, {"id":"202","parent_group_id":"2"}, {"id":"302","parent_group_id":"2"}, {"id":"402","parent_group_id":"2"}, {"id":"502","parent_group_id":"2"}, {"id":"602","parent_group_id":"2"}, {"id":"802","parent_group_id":"2"}, {"id":"902","parent_group_id":"2"}, {"id":"1002","parent_group_id":"2"}, {"id":"3","parent_group_id":"3"}, {"id":"4","parent_group_id":"4"}, {"id":"104","parent_group_id":"4"}, {"id":"204","parent_group_id":"4"}, {"id":"304","parent_group_id":"4"}, {"id":"404","parent_group_id":"4"}, {"id":"504","parent_group_id":"4"}, {"id":"604","parent_group_id":"4"}, {"id":"5","parent_group_id":"5"}, {"id":"105","parent_group_id":"5"}, {"id":"205","parent_group_id":"5"}, {"id":"305","parent_group_id":"5"}, {"id":"405","parent_group_id":"5"}, {"id":"505","parent_group_id":"5"}, {"id":"905","parent_group_id":"5"}, {"id":"1005","parent_group_id":"5"}, {"id":"6","parent_group_id":"6"}, {"id":"106","parent_group_id":"6"}, {"id":"206","parent_group_id":"6"}, {"id":"306","parent_group_id":"6"}, {"id":"406","parent_group_id":"6"}, {"id":"506","parent_group_id":"6"}, {"id":"606","parent_group_id":"6"}, {"id":"706","parent_group_id":"6"}, {"id":"7","parent_group_id":"7"}, {"id":"107","parent_group_id":"7"}, {"id":"207","parent_group_id":"7"}, {"id":"8","parent_group_id":"8"}, {"id":"108","parent_group_id":"8"}, {"id":"208","parent_group_id":"8"}, {"id":"9","parent_group_id":"9"}, {"id":"109","parent_group_id":"9"}, {"id":"10","parent_group_id":"10"}, {"id":"110","parent_group_id":"10"}, {"id":"210","parent_group_id":"10"}, {"id":"310","parent_group_id":"10"}, {"id":"410","parent_group_id":"10"}, {"id":"510","parent_group_id":"10"}, {"id":"1010","parent_group_id":"10"}, {"id":"11","parent_group_id":"11"}, {"id":"111","parent_group_id":"11"}, {"id":"12","parent_group_id":"12"}, {"id":"112","parent_group_id":"12"}, {"id":"212","parent_group_id":"12"}, {"id":"312","parent_group_id":"12"}, {"id":"412","parent_group_id":"12"}, {"id":"512","parent_group_id":"12"}, {"id":"612","parent_group_id":"12"}, {"id":"712","parent_group_id":"12"}, {"id":"812","parent_group_id":"12"}, {"id":"912","parent_group_id":"12"}, {"id":"1012","parent_group_id":"12"}, {"id":"1112","parent_group_id":"12"}, {"id":"1212","parent_group_id":"12"}, {"id":"1312","parent_group_id":"12"}, {"id":"13","parent_group_id":"13"}, {"id":"14","parent_group_id":"14"}, {"id":"114","parent_group_id":"14"}, {"id":"214","parent_group_id":"14"}, {"id":"15","parent_group_id":"15"}, {"id":"115","parent_group_id":"15"}, {"id":"215","parent_group_id":"15"}, {"id":"315","parent_group_id":"15"}, {"id":"415","parent_group_id":"15"}, {"id":"515","parent_group_id":"15"}, {"id":"615","parent_group_id":"15"}, {"id":"16","parent_group_id":"16"}, {"id":"17","parent_group_id":"17"}, {"id":"117","parent_group_id":"17"}, {"id":"217","parent_group_id":"17"}, {"id":"317","parent_group_id":"17"}, {"id":"417","parent_group_id":"17"}, {"id":"517","parent_group_id":"17"}, {"id":"18","parent_group_id":"18"}, {"id":"118","parent_group_id":"18"}, {"id":"218","parent_group_id":"18"}, {"id":"318","parent_group_id":"18"}, {"id":"418","parent_group_id":"18"}, {"id":"1018","parent_group_id":"18"}, {"id":"19","parent_group_id":"19"}, {"id":"20","parent_group_id":"20"}, {"id":"120","parent_group_id":"20"}, {"id":"220","parent_group_id":"20"}, {"id":"320","parent_group_id":"20"}, {"id":"520","parent_group_id":"20"}, {"id":"21","parent_group_id":"21"}, {"id":"22","parent_group_id":"22"}, {"id":"122","parent_group_id":"22"}, {"id":"23","parent_group_id":"23"}, {"id":"123","parent_group_id":"23"}, {"id":"24","parent_group_id":"24"}, {"id":"25","parent_group_id":"25"}, {"id":"26","parent_group_id":"26"}, {"id":"126","parent_group_id":"26"}, {"id":"226","parent_group_id":"26"}, {"id":"326","parent_group_id":"26"}, {"id":"426","parent_group_id":"26"}, {"id":"526","parent_group_id":"26"}, {"id":"626","parent_group_id":"26"}, {"id":"726","parent_group_id":"26"}, {"id":"826","parent_group_id":"26"}, {"id":"926","parent_group_id":"26"}, {"id":"1026","parent_group_id":"26"}, {"id":"1126","parent_group_id":"26"}, {"id":"1225","parent_group_id":"26"}, {"id":"2026","parent_group_id":"26"}, {"id":"27","parent_group_id":"27"}, {"id":"28","parent_group_id":"28"}, {"id":"128","parent_group_id":"28"}, {"id":"228","parent_group_id":"28"}, {"id":"328","parent_group_id":"28"}, {"id":"428","parent_group_id":"28"}, {"id":"528","parent_group_id":"28"}, {"id":"828","parent_group_id":"28"}, {"id":"928","parent_group_id":"28"}];

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