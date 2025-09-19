<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            WorldSeeder::class,
            CategoriesSeeder::class,
            FlightClassSeeder::class,
            MountainsSeeder::class,
            BeachesSeeder::class,
            HistoricalPlacesSeeder::class,
            NaturalPlacesSeeder::class,
            RestaurantsSeeder::class,
            HotelsSeeder::class,
            AirlineSeeder::class,
            AirportSeeder::class,
            CarcompaniesSeeder::class,
            CarSeeder::class,
            AirflightSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
