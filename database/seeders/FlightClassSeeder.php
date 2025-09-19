<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                ['name' => 'economic'],
                ['name' => 'bussiness'],
                ['name' => 'VIP'],
                ['name' => 'first class'],
            ];
        DB::table('flightclasses')->insert($data);
    }
}
