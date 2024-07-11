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
            'name' => fake()->sentence(3),
            'price' => rand(1000, 10000) ,
            'weight' => mt_rand(1, 4) / 1.8,
            'quantity' => 50,
            'active' => fake()->boolean(80),
            'image' => fake()->imageUrl(),
            'description' => fake()->paragraph(),
        ];
    }
}
