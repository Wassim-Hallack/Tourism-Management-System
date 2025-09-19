<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirflightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'departure_datetime' => '2023-08-01 08:00:00',
                'arrival_datetime' => '2023-08-01 11:00:00',
                'price' => 350,
                'airline_id' => 1,
                'flightclass_id' => 1,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-02 12:00:00',
                'arrival_datetime' => '2023-08-02 18:00:00',
                'price' => 500,
                'airline_id' => 2,
                'flightclass_id' => 2,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-03 09:00:00',
                'arrival_datetime' => '2023-08-03 14:00:00',
                'price' => 600,
                'airline_id' => 3,
                'flightclass_id' => 1,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-04 11:00:00',
                'arrival_datetime' => '2023-08-04 16:00:00',
                'price' => 400,
                'airline_id' => 4,
                'flightclass_id' => 2,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-05 14:00:00',
                'arrival_datetime' => '2023-08-05 20:00:00',
                'price' => 450,
                'airline_id' => 5,
                'flightclass_id' => 1,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-06 08:00:00',
                'arrival_datetime' => '2023-08-06 12:00:00',
                'price' => 300,
                'airline_id' => 6,
                'flightclass_id' => 2,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-07 16:00:00',
                'arrival_datetime' => '2023-08-07 22:00:00',
                'price' => 550,
                'airline_id' => 7,
                'flightclass_id' => 1,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-08 10:00:00',
                'arrival_datetime' => '2023-08-08 16:00:00',
                'price' => 400,
                'airline_id' => 8,
                'flightclass_id' => 2,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-09 13:00:00',
                'arrival_datetime' => '2023-08-09 17:00:00',
                'price' => 350,
                'airline_id' => 9,
                'flightclass_id' => 1,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
            [
                'departure_datetime' => '2023-08-10 15:00:00',
                'arrival_datetime' => '2023-08-10 21:00:00',
                'price' => 500,
                'airline_id' => 10,
                'flightclass_id' => 2,
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'statet_id' => 1,
                'statel_id' => 1,
            ],
        ];
        DB::table('airflights')->insert($data);
    }
}
