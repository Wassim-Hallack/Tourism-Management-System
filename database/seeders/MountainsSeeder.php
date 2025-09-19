<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Illuminate\Events\queueable;

class MountainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Mount Everest ',
                'location' => 'Nepal',
                'yearly_visitors' => 45000,
                'description' => 'The highest mountain in the world,standing at 29,029 feet (8,848 meters) tall.
                 It is located in the Himalayas and is known for its difficult climbing routes and extreme altitude.',
                 'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Kilimanjaro',
                'location' => 'Tanzania',
                'yearly_visitors' => 50000,
                'description' => "Africa's highest mountain, standing at 19,336 feet (5,895 meters).
                It is a popular hiking destination and is known for its diverse ecosystems and stunning views.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Fuji',
                'location' => 'Japan',
                'yearly_visitors' => 300000,
                'description' => "An active volcano and Japan's tallest mountain at 12,388 feet (3,776 meters). It is a sacred site and a popular tourist destination for hiking and sightseeing.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mont Blanc',
                'location' => 'France',
                'yearly_visitors' => 20000,
                'description' => "he highest mountain in the Alps, standing at 15,777 feet (4,809 meters). It is a popular destination for skiing, hiking, and mountaineering.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Matterhorn',
                'location' => 'Switzerland',
                'yearly_visitors' => 100000,
                'description' => "A distinctive peak in the Alps with a pyramidal shape, standing at 14,692 feet (4,478 meters). It is known for its challenging climbing routes and stunning views.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Rainier',
                'location' => 'USA',
                'yearly_visitors' => 1500000,
                'description' => "An active volcano and the highest mountain in the state of Washington, standing at 14,417 feet (4,394 meters).
                It is a popular destination for hiking, climbing, and sightseeing.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Denali',
                'location' => 'USA',
                'yearly_visitors' => 400000,
                'description' => "The highest mountain in North America, standing at 20,310 feet (6,190 meters). It is known for its extreme weather conditions and challenging climbing routes.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Aconcagua',
                'location' => 'Argentina',
                'yearly_visitors' => 15000,
                'description' => "The highest mountain in the Western Hemisphere, standing at 22,841 feet (6,962 meters). It is a popular destination for mountaineering and trekking.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Elbrus',
                'location' => 'Russia',
                'yearly_visitors' => 50000,
                'description' => "The highest mountain in Europe, standing at 18,510 feet (5,642 meters). It is a popular destination for skiing and mountaineering.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Whitney',
                'location' => 'USA',
                'yearly_visitors' => 30000,
                'description' => "The highest mountain in the contiguous United States, standing at 14,505 feet (4,421 meters). It is a popular destination for hiking and climbing.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Kosciuszko',
                'location' => 'Australia',
                'yearly_visitors' => 100000,
                'description' => "The highest mountain in Australia, standing at 7,310 feet (2,228 meters). It is a popular destination for hiking and skiing.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Cook',
                'location' => 'New Zealand',
                'yearly_visitors' => 300000,
                'description' => "The highest mountain in New Zealand, standing at 12,218 feet (3,724 meters). It is a popular destination for mountaineering and skiing.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Huangshan',
                'location' => 'China',
                'yearly_visitors' => 2000000,
                'description' => "A scenic mountain range known for its unique rock formations and beautiful sunrises. It is a popular destination for hiking, sightseeing, and photography.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Table Mountain',
                'location' => 'South Africa',
                'yearly_visitors' => 2000000,
                'description' => "A flat-topped mountain overlooking Cape Town and known for its stunning views and diverse flora and fauna. It is a popular destination for hiking and sightseeing.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Etna',
                'location' => 'Italy',
                'yearly_visitors' => 2000000,
                'description' => "An active volcano and the tallest mountain in Italy, standing at 10,922 feet (3,329 meters). It is a popular destination for hiking and sightseeing.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Bromo',
                'location' => 'Indonesia',
                'yearly_visitors' => 1000000,
                'description' => "A popular tourist destination known for its dramatic volcanic landscape and frequent eruptions. It is a popular destination for hiking, sightseeing, and photography.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Huang',
                'location' => 'China',
                'yearly_visitors' => 1000000,
                'description' => "A sacred mountain in Chinese culture, known for its stunning scenery and historic temples. It is a popular destination for hiking,sightseeing, and cultural experiences.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Kinabalu',
                'location' => 'Malaysia',
                'yearly_visitors' => 500000,
                'description' => "The highest mountain in Malaysia, standing at 13,435 feet (4,095 meters). It is known for its rich biodiversity and is a popular destination for hiking and nature exploration.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Titlis',
                'location' => 'Switzerland',
                'yearly_visitors' => 1000000,
                'description' => "A popular ski resort and mountain attraction with stunning views of the Swiss Alps. It is known for its cable car ride, ice grotto, and glacier walks.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ],
            [
                'name' => 'Mount Hua',
                'location' => 'China',
                'yearly_visitors' => 1000000,
                'description' => "A scenic mountain range known for its unique rock formations, steep cliffs, and historic temples. It is a popular destination for hiking, sightseeing, and cultural experiences.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 1
            ]
        ];

        DB::table('tourism_places')->insert($data);
    }
}
