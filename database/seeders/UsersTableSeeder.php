<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $password = bcrypt('secret');

        for ($i = 0; $i < 10; ++$i) {
            User::query()->create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $password,
            ]);
        }
    }
}
