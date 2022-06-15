<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Route;
use App\Models\Bus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignRoute>
 */
class BusRouteFactory extends Factory
{
    /**s
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'route_id' => function()
            {
                return Route::all()->random();
            },
            'bus_id' => function()
            {
                return Bus::all()->random();
            },
            'trip_date' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
