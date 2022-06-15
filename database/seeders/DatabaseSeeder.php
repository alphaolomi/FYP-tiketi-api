<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory(10)->create();
        \App\Models\BusClass::factory(3)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\Driver::factory(15)->create();
        \App\Models\Route::factory(5)->create();
        \App\Models\Bus::factory(20)->create();
        \App\Models\CompanyBus::factory(20)->create();
        // \App\Models\BusRoute::factory(10)->create();
        \App\Models\BusRoute::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
