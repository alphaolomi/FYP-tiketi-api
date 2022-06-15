<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusClass>
 */
class BusClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'class_name' => $this->faker->randomElement(['Luxury', 'Ordinary', 'Semi-luxury']),
            
            'seat_number' => $this->faker->numberBetween(60,70),
        ];
    }
}
