<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$roles = array(
			array(
				'id' => 1,
				'name' => 'administrator',
			),
			array(
				'id' => 2,
				'name' => 'standard',
			),
			array(
				'id' => 3,
				'name' => 'collaborator',
			),
			array(
				'id' => 4,
				'name' => 'moderator',
			),
			array(
				'id' => 5,
				'name' => 'sponsor',
			),
		);
		foreach ($roles as $role) {
			DB::table('roles')->insert([
				'id' => $role['id'],
				'name' => $role['name'],
			]);
		}
	}
}
