<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarcompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Hertz',
                'website' => 'https://www.hertz.com/',
                'phone' => '+1-800-654-3131',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Avis', 'website' => 'https://www.avis.com/', 'phone' => '+1-800-633-3469',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Enterprise', 'website' => 'https://www.enterprise.com/', 'phone' => '+1-855-266-9565',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Budget', 'website' => 'https://www.budget.com/', 'phone' => '+1-800-218-7992',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'National', 'website' => 'https://www.nationalcar.com/', 'phone' => '+1-844-393-9989',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Alamo', 'website' => 'https://www.alamo.com/', 'phone' => '+1-844-357-5138',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Thrifty', 'website' => 'https://www.thrifty.com/', 'phone' => '+1-800-847-4389',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Dollar', 'website' => 'https://www.dollar.com/', 'phone' => '+1-800-800-4000',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Sixt', 'website' => 'https://www.sixt.com/', 'phone' => '+1-888-749-8227',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ],
            [
                'name' => 'Europcar', 'website' => 'https://www.europcar.com/', 'phone' => '+1-877-940-6900', 'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
            ]
        ];
        DB::table('car_companies')->insert($data);
    }
}
