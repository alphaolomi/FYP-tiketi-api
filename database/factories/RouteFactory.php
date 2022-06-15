<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'via' => $this->faker->city(),
            'region_from' => $this->faker->city(),
            'destination' => $this->faker->city(),
            'price' => $this->faker->numberBetween(25, 38)
        ];
    }
}
