<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Emirates',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Singapore Airlines',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Qatar Airways',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Cathay Pacific',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'ANA All Nippon Airways',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Etihad Airways',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Turkish Airlines',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'EVA Air',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Virgin Atlantic',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Air New Zealand',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Qantas',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Lufthansa',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Finnair',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Swiss International Air Lines',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'KLM Royal Dutch Airlines',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Air France',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Delta Air Lines',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'American Airlines',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'United Airlines',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'British Airways',  'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ]
        ];
        DB::table('airlines')->insert($data);
    }
}
