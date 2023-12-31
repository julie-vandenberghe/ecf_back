<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matelas>
 */
class MatelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(1),
            'brand_id' => $this->faker->numberBetween(1,5),
            //'size_id' => $this->faker->numberBetween(1,3),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(500, 1500),
            'discount_price' => $this->faker->numberBetween(500, 1500),
        ];
    }
}
