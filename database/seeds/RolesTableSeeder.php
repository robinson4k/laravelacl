<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Role::firstOrCreate([
			'name' =>'Admin',
			'description' =>'Acesso total ao sistema'
		]);

		Role::firstOrCreate([
			'name' =>'Usuario',
			'description' =>'Acesso ao site como usuário'
		]);
    }
}
