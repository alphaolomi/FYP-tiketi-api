<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => function()
            {
                return User::all()->random();
            },
            'nida_number' => $this->faker->numberBetween(199938847688377456389, 199938847688377456389 ),

            'drive_licence' => $this->faker->numberBetween(6788, 74584845),

            'company_id' => function()
            {
                return Company::all()->random();
            },
        ];
    }
}
