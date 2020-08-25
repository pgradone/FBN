<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // build users array
    // $users = array(
    //   array(
    //     'role_id' => 2,
    //     'name' => 'pot',
    //     'email' => 'pgradone@gmail.com',
    //     'created_at' => '2020-08-24 07:59:30',
    //     'updated_at' => '2020-08-24 07:59:30',
    //   ),
    // );
    $users = array(
      array(
        'role_id' => 2,
        'name' => 'pot',
        'email' => 'pgradone@gmail.com',
        'password' => '$2y$10$OVnbWsGCPPrKPfU092UxnO6HydTFS55KAilg2jCklHWQDaS0DrhIO',
        'created_at' => '2020-08-24 07:59:30',
        'updated_at' => '2020-08-24 07:59:30',
      ),
      array(
        'role_id' => 2,
        'name' => 'gui',
        'email' => 'gui_pereira10@live.com.pt',
        'password' => '$2y$10$pbfHz0umBNpxsNwMr.IWe.sNqcEJUZjAnYulczqgjiNXSwiIuOZ/2',
        'created_at' => '2020-08-24 07:59:30',
        'updated_at' => '2020-08-24 07:59:30',
      ),
      array(
        'role_id' => 2,
        'name' => 'fab',
        'email' => 'faballa.cisse@gmail.com',
        'password' => '$2y$10$pbfHz0umBNpxsNwMr.IWe.sNqcEJUZjAnYulczqgjiNXSwiIuOZ/2',
        'created_at' => '2020-08-24 07:59:30',
        'updated_at' => '2020-08-24 07:59:30',
      ),
      array(
        'role_id' => 2,
        'name' => 'jef',
        'email' => 'JeffCigrand@me.com',
        'password' => '$2y$10$pbfHz0umBNpxsNwMr.IWe.sNqcEJUZjAnYulczqgjiNXSwiIuOZ/2',
        'created_at' => '2020-08-24 07:59:30',
        'updated_at' => '2020-08-24 07:59:30',
      ),
    );

    // fill the users from users array
    foreach ($users as $user) {
      DB::table('users')->insert([
        'role_id' => $user['role_id'],
        'name' => $user['name'],
        'email' => $user['email'],
        'password' => $user['password'],
        'created_at' => $user['created_at'],
        'updated_at' => $user['updated_at'],
      ]);
    }
  }
}
