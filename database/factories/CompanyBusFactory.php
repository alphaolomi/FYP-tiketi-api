<?php

namespace Database\Factories;

use App\Models\BusClass;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyBus>
 */
class CompanyBusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bus_id' => function()
            {
                return BusClass::all()->random();
            },

            'company_id' => function()
            {
                return Company::all()->random();
            }
        ];
    }
}
