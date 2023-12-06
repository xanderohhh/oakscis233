<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 0.99, 999999.99),
            'description' => $this->faker->sentence,
            'item_number' => $this->faker->numberBetween(0,999),
            'image' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats')
        ];
    }
}
