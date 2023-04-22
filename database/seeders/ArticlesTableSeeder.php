<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        User::query()->get()->each(function ($user) use ($faker) {
            foreach (range(1, 5) as $i) {
                Article::query()->create([
                    'user_id' => $user->id,
                    'title' => $faker->sentence,
                    'content' => $faker->paragraphs(3, true),
                ]);
            }
        });
    }
}
