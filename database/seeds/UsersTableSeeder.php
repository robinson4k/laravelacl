<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Factory::create();
        for ($i=0; $i < 50; $i++)
		{
			User::create([
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => bcrypt($faker->password),
			]);
		}
    }
}
