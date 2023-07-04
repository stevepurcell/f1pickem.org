<?php

namespace Database\Seeders;

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
        $this->call([
            CountrySeeder::class,
            ConstructorSeeder::class,
            DriverSeeder::class,
            PicksSeeder::class,
            ResultsSeeder::class,
            RaceSeeder::class,
            TracksSeeder::class,
            UsersSeeder::class,
        ]);
        // \App\Models\User::factory(30)->create();
    }
}
