<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
		$this->call(UsersTableSeeder::class);
=======
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
>>>>>>> 7692020ee4ab0b8ec3dbe15b703db6ed5cb6487e
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
>>>>>>> 50152922be911614af2e3e3e07e14530850b4033
    }
}
