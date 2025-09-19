<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NaturalPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Grand Canyon National Park',
                'location' => 'USA',
                'yearly_visitors' => 6400000,
                'description' => 'The Grand Canyon is a breathtaking natural wonder that has been carved by the Colorado River over millions of years.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Niagara Falls',
                'location' => 'Canada/USA',
                'yearly_visitors' => 30000000,
                'description' => 'Niagara Falls is a collection of three waterfalls that are a popular tourist destination located on the border between Canada and the United States.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Yellowstone National Park',
                'location' => 'USA',
                'yearly_visitors' => 4000000,
                'description' => 'Yellowstone is the world\'s first national park and is home to a wide variety of wildlife, including grizzly bears, wolves, and elk. It is located primarily in Wyoming.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Great Barrier Reef',
                'location' => 'Australia',
                'yearly_visitors' => 2000000,
                'description' => 'The Great Barrier Reef isthe world\'s largest coral reef system, located off the coast of Australia. It is home to thousands of species of marine life and is a popular destination for diving and snorkeling.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Yosemite National Park',
                'location' => 'USA',
                'yearly_visitors' => 4000000,
                'description' => 'Yosemite is known for its stunning granite cliffs, waterfalls, and giant sequoia trees. It is located in California.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Serengeti National Park',
                'location' => 'Tanzania',
                'yearly_visitors' => 350000,
                'description' => 'The Serengeti is a vast savannah in Tanzania that is famous for its annual wildebeest migration and its diverse wildlife, including lions, elephants, and giraffes.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Galapagos Islands',
                'location' => 'Ecuador',
                'yearly_visitors' => 275000,
                'description' => 'The Galapagos Islands are a group of volcanic islands located in the Pacific Ocean, famous for their unique wildlife, including giant tortoises, marine iguanas, and blue-footed boobies.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Zhangjiajie National Forest Park',
                'location' => 'China',
                'yearly_visitors' => 10000000,
                'description' => 'Zhangjiajie is known for its towering sandstone pillars and breathtaking views. It is located in Hunan province in China.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Ayers Rock (Uluru)',
                'location' => 'Australia',
                'yearly_visitors' => 400000,
                'description' => 'Uluru is a massive sandstone rock formation that is sacred to the Indigenous people of the area. It is located in the heart of Australia.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Iguazu Falls',
                'location' => 'Argentina/Brazil',
                'yearly_visitors' => 1500000,
                'description' => 'Iguazu Falls is a collection of waterfalls that are one of the largest and most spectacular in the world. They are located on the border between Argentina and Brazil.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Plitvice Lakes National Park',
                'location' => 'Croatia',
                'yearly_visitors' => 1000000,
                'description' => 'Plitvice Lakes isa series of interconnected lakes and waterfalls in Croatia that are known for their stunning turquoise color.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Banff National Park',
                'location' => 'Canada',
                'yearly_visitors' => 4000000,
                'description' => 'Banff is Canada\'s oldest national park and is known for its stunning mountain scenery and glaciers. It is located in Alberta.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Torres del Paine National Park',
                'location' => 'Chile',
                'yearly_visitors' => 250000,
                'description' => 'Torres del Paine is known for its towering granite peaks, glaciers, and turquoise lakes. It is located in the Patagonian region of Chile.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Mount Everest',
                'location' => 'Nepal/China',
                'yearly_visitors' => 50000,
                'description' => 'Mount Everest is the highest peak in the world and is located on the border between Nepal and China. It is a popular destination for mountaineers and trekkers.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'The Great Smoky Mountains National Park',
                'location' => 'USA',
                'yearly_visitors' => 11000000,
                'description' => 'The Great Smoky Mountains is a mountain range that straddles the border between North Carolina and Tennessee and is known for its beautiful fall foliage. It is located in the southern United States.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'The Amazon Rainforest',
                'location' => 'Brazil',
                'yearly_visitors' => 2000000,
                'description' => 'The Amazon Rainforest is the largest tropical rainforest in the world, covering much of northern Brazil and parts of other South American countries.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'The Great Ocean Road',
                'location' => 'Australia',
                'yearly_visitors' => 6000000,
                'description' => 'The Great Ocean Road is a scenic coastal drive that offers stunning views of the Australian coastline, including the famous Twelve Apostles. It is located in Victoria.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'Zion National Park',
                'location' => 'USA',
                'yearly_visitors' => 4500000,
                'description' => 'Zion is known for its stunning canyons, red rock formations, and hiking trails. It is located in Utah.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'The Dolomites',
                'location' => 'Italy',
                'yearly_visitors' => 5000000,
                'description' => 'The Dolomites are a range of mountains located in northern Italy that are known for their rugged beauty and skiing opportunities.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ],
            [
                'name' => 'The Cliffs of Moher',
                'location' => 'Ireland',
                'yearly_visitors' => 1500000,
                'description' => 'The Cliffs of Moher are a series of sea cliffs located on the west coast of Ireland that offer stunning views of the Atlantic Ocean and the surrounding countryside.',
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 4
            ]
        ];

        DB::table('tourism_places')->insert($data);
    }
}
