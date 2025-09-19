<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Bondi Beach',
                'location' => 'Australia',
                'yearly_visitors' => 2600000,
                'description' => 'Bondi Beach is one of the most famous beaches in Australia. Its crescent-shaped shoreline is perfect for surfing and swimming, and the surrounding area is home to a thriving beach culture.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2,

            ],
            [
                'name' => 'Waikiki Beach',
                'location' => 'Hawaii',
                'yearly_visitors' => 4000000,
                'description' => 'Located in Honolulu, Waikiki Beach is known for its white sand and crystal-clear water. It attracts over 4 million visitors each year, making it one of the most popular tourist destinations in Hawaii.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Copacabana Beach',
                'location' => 'Brazil',
                'yearly_visitors' => 2000000,
                'description' => 'Copacabana Beach is a 4-kilometer stretch of sand in Rio de Janeiro, Brazil. It attracts over 2 million visitors per year and is known for its lively atmosphere, with beach parties, live music, and volleyball games.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Ipanema Beach',
                'location' => 'Brazil',
                'yearly_visitors' => 1500000,
                'description' => 'Also located in Rio de Janeiro, Ipanema Beach is a popular destination for both locals and tourists. It\'s known for its beautiful views, clear water, and lively beach culture.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Cancun Beach',
                'location' => 'Mexico',
                'yearly_visitors' => 4000000,
                'description' => 'Cancun is a popular tourist destination in Mexico, and its beaches are a major draw. With over 4 million visitors per year, Cancun Beach is known for its crystal-clear water and soft white sand.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Miami Beach',
                'location' => 'Florida, USA',
                'yearly_visitors' => 7000000,
                'description' => 'Miami Beach is one of the most famous beaches in the United States, with its vibrant culture and turquoise water. It attracts over 7 million visitors per year, making it a popular destination for tourists and locals alike.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Venice Beach',
                'location' => 'California, USA',
                'yearly_visitors' => 10000000,
                'description' => 'Venice Beach is a popular destination in Los Angeles, known for its eclectic mix of street performers, artists, and vendors. With over 10 million visitors per year, it\'s one of the busiest beaches in California.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Myrtle Beach',
                'location' => 'South Carolina, USA',
                'yearly_visitors' => 13000000,
                'description' => 'Myrtle Beach is a popular vacation spot in the southeastern United States, attracting over 13 million visitors per year. Its wide beaches and warm water make it a popular destination for families.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Phuket Beach',
                'location' => 'Thailand',
                'yearly_visitors' => 3000000,
                'description' => 'Phuket is a popular tourist destination in Thailand, with its beautiful beaches being a major attraction. Patong Beach, in particular, attracts over 3 million visitors per year, known for its lively nightlife and crystal-clear water.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Negril Beach',
                'location' => 'Jamaica',
                'yearly_visitors' => 1000000,
                'description' => 'Negril is a popular destination in Jamaica, with its stunning beaches and laid-back atmosphere. Seven Mile Beach, in particular, attracts over 1 million visitors per year, known for its long stretch of white sand and clear water.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Maldives Beaches',
                'location' => 'Maldives',
                'yearly_visitors' => 1000000,
                'description' => 'The Maldives is known for its stunning beaches, with crystal-clear water and coral reefs. Some popular beaches include Maafushi Beach, Bikini Beach, and Fulhadhoo Beach, attracting over 1 million visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Patara Beach',
                'location' => 'Turkey',
                'yearly_visitors' => 500000,
                'description' => 'Patara Beach is a long stretch of sand located in southwestern Turkey. It\'s known for its stunning views, clear water, and ancient ruins nearby. It attracts over 500,000 visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Anse Source d\'Argent',
                'location' => 'Seychelles',
                'yearly_visitors' => 200000,
                'description' => 'Anse Source d\'Argent is a beautifulbeach located on La Digue Island in the Seychelles. Its unique granite boulders and turquoise water make it a popular destination, attracting over 200,000 visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Navagio Beach',
                'location' => 'Greece',
                'yearly_visitors' => 500000,
                'description' => 'Navagio Beach is located on the Greek island of Zakynthos and is known for its crystal-clear water and white sand. It\'s accessible only by boat and attracts over 500,000 visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Praia do Sancho',
                'location' => 'Brazil',
                'yearly_visitors' => 100000,
                'description' => 'Praia do Sancho is located on the remote Fernando de Noronha archipelago in Brazil. Its clear water, coral reefs, and vibrant marine life make it a popular destination for scuba diving and snorkeling, attracting over 100,000 visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Elafonisi Beach',
                'location' => 'Greece',
                'yearly_visitors' => 300000,
                'description' => 'Elafonisi Beach is located on thesouthwestern coast of Crete in Greece. Its pink sand and turquoise water make it a popular destination, attracting over 300,000 visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Whitehaven Beach',
                'location' => 'Australia',
                'yearly_visitors' => 300000,
                'description' => 'Whitehaven Beach is a pristine beach located on Whitsunday Island in Australia. Its white sand and clear water make it a popular destination, attracting over 300,000 visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Seminyak Beach',
                'location' => 'Bali',
                'yearly_visitors' => 1000000,
                'description' => 'Seminyak Beach is located on the island of Bali in Indonesia. Its wide stretch of sand and clear water make it a popular destination for surfing and sunbathing, attracting over 1 million visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Horseshoe Bay Beach',
                'location' => 'Bermuda',
                'yearly_visitors' => 500000,
                'description' => 'Horseshoe Bay Beach is one of the most famous beaches in Bermuda, known for its pink sand and clear water. It attracts over 500,000 visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ],
            [
                'name' => 'Biarritz Beach',
                'location' => 'France',
                'yearly_visitors' => 1000000,
                'description' => 'Biarritz Beach is located on the southwestern coast of France and is known for its stunning views and great surf. It attracts over 1 million visitors per year.',
                'published_at' => Carbon::now()->addHours(3)->toDateTimeString(),
                'active' => true,
                'categorie_id' => 2
            ]
        ];

        DB::table('tourism_places')->insert($data);
    }
}
