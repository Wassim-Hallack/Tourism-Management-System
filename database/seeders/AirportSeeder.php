<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'IATA_code' => 'DXB',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'SIN',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'DOH',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'HKG',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'NRT',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'AUH',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'IST',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'TPE',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'LHR',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'AKL',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'SYD',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'FRA',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'HEL',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'ZRH',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'AMS',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'CDG',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'ATL',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'DFW',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'ORD',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'IATA_code' => 'LHR',  'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ]
        ];
        DB::table('airports')->insert($data);
    }
}
