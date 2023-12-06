<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Product;
use Faker\Factory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->delete();

        $faker = Factory::create();

        foreach(range(1,50) as $number) {
            Product::create([
                'name' => $faker->name,
                'price' => $faker->randomFloat(2, 0.99, 999999.99),
                'description' => $faker->sentence,
                'item_number' => $faker->randomNumber(3),
                'image' => $faker->imageUrl(360, 360, 'animals', true, 'cats')
            ]);
        }

    }
}
