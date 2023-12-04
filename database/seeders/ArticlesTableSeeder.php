<?php

// database/seeders/ArticlesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Article::create([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}

