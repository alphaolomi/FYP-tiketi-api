<?php

namespace Database\Factories;

use App\Models\BusClass;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Driver;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bus_name' => $this->faker->word(),
            'plate_number' => Str::random(7),
            'bus_image' => $this->faker->url(),
            'total_seats' => $this->faker->randomElement([50, 60, 70]),
            'class_id' => function()
            {
                return BusClass::all()->random();
            },
            'insurance_number' => $this->faker->numberBetween(94568, 7858699),
            'depature_time' => $this->faker->date('Y-m-d H:i:s'),
            'driver_id' => function()
            {
                return Driver::all()->random();
            },
            'company_id' => function()
            {
                return Company::all()->random();
            }
        ];
    }
}
