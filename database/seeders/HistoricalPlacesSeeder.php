<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoricalPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'The Great Wall of China',
                'location' => 'China',
                'yearly_visitors' => 100000000,
                'description' => "The Great Wall of China is a series of walls and fortifications that were built over a period of 2,000 years to protect China from invaders.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Pyramids of Giza',
                'location' => 'Egypt',
                'yearly_visitors' => 1500000,
                'description' => "The Pyramids of Giza are a complex of ancient tombs located in Cairo, Egypt. They were built over 4,500 years ago as the final resting place for pharaohs and their consorts.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'Machu Picchu',
                'location' => 'Peru',
                'yearly_visitors' => 1500000,
                'description' => "Machu Picchu is an ancient Incan city located in the Andes Mountains of Peru. It was built in the 15th century and abandoned during the Spanish conquest of South America.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Colosseum',
                'location' => 'Rome, Italy',
                'yearly_visitors' => 7000000,
                'description' => "The Colosseum is a massive amphitheater located in the center of Rome, Italy. It was built in 70-80 AD and was used for gladiatorial contests and public spectacles.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Taj Mahal',
                'location' => 'Agra, India',
                'yearly_visitors' => 7000000,
                'description' => "The Taj Mahal is a white marble mausoleum located in Agra, India. It was built in the 17th century by the Mughal emperor Shah Jahan in memory of his wife Mumtaz Mahal.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'Angkor Wat',
                'location' => 'Cambodia',
                'yearly_visitors' => 2000000,
                'description' => "Angkor Wat is a temple complex located in Siem Reap, Cambodia. It was built in the 12th century by the Khmer king Suryavarman II as a Hindu temple, and later converted to a Buddhist temple.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Acropolis',
                'location' => 'Athens,Greece',
                'yearly_visitors' => 2600000,
                'description' => "The Acropolis is an ancient citadel located in Athens, Greece. It includes several ancient buildings, including the Parthenon, and was built in the 5th century BCE.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'Chichén Itzá',
                'location' => 'Yucatan, Mexico',
                'yearly_visitors' => 2000000,
                'description' => "Chichén Itzá is a complex of Mayan ruins located in the Yucatan Peninsula of Mexico. It was built in the 9th and 10th centuries CE and includes several impressive structures, such as the Temple of Kukulcan.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'Petra',
                'location' => 'Jordan',
                'yearly_visitors' => 700000,
                'description' => "Petra is an ancient city located in Jordan. It was built by the Nabataeans in the 1st century BCE and is known for its impressive rock-cut architecture, including the Treasury and the Monastery.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Forbidden City',
                'location' => 'Beijing, China',
                'yearly_visitors' => 10000000,
                'description' => "The Forbidden City is a palace complex located in the center of Beijing, China. It was built in the 15th century and served as the imperial palace for the Ming and Qing dynasties.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'Stonehenge',
                'location' => 'Wiltshire, England',
                'yearly_visitors' => 800000,
                'description' => "Stonehenge is a prehistoric monument located in Wiltshire, England. It was built in several stages between 3000 BCE and 2000 BCE and is believed to have been used for religious and ceremonial purposes.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Alhambra',
                'location' => 'Granada, Spain',
                'yearly_visitors' => 2500000,
                'description' => "The Alhambra is a palace and fortress complex located in Granada, Spain. It was built in the 14th century by the Nasrid dynasty and includes several impressive buildings and gardens.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Roman Forum',
                'location' => 'Rome, Italy',
                'yearly_visitors' => 6000000,
                'description' => "The Roman Forum is an ancient plaza locatedin the center of Rome, Italy. It was the political and social hub of ancient Rome and includes several ruins of important buildings and temples, such as the Temple of Saturn and the Arch of Titus.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Hagia Sophia',
                'location' => 'Istanbul, Turkey',
                'yearly_visitors' => 3500000,
                'description' => "The Hagia Sophia is a historic mosque and museum located in Istanbul, Turkey. It was originally built as a cathedral in the 6th century by the Byzantine emperor Justinian I and later converted to a mosque by the Ottoman Empire.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Parthenon',
                'location' => 'Athens, Greece',
                'yearly_visitors' => 5000000,
                'description' => "The Parthenon is an ancient temple located on the Acropolis in Athens, Greece. It was built in the 5th century BCE as a temple to the goddess Athena and is considered one of the greatest achievements of ancient Greek architecture.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Terracotta Army',
                'location' => 'Xi\'an, China',
                'yearly_visitors' => 3000000,
                'description' => "The Terracotta Army is a collection of terracotta sculptures that depict the armies of the first emperor of China, Qin Shi Huang. It is located in Xi'an, China and was built in the 3rd century BCE as part of the emperor's tomb complex.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Tower of London',
                'location' => 'London, England',
                'yearly_visitors' => 2900000,
                'description' => "The Tower of London is a historic castle located in central London, England. It was built in the 11th century and has been used for a variety of purposes over the centuries, including as a royal palace, a prison, and a treasury.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Sistine Chapel',
                'location' => 'Vatican City',
                'yearly_visitors' => 6000000,
                'description' => "The Sistine Chapel is a chapel located in the Vatican City. It is famous for its ceiling, which was painted by Michelangelo in the early 16th century and depicts scenes from the Book of Genesis.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Palace of Versailles',
                'location' => 'Versailles, France',
                'yearly_visitors' => 8000000,
                'description' => "The Palace of Versailles is a historic royal chateau located in Versailles, France. It was built in the 17th century as a symbol of the power and grandeur of the French monarchy and is known for its opulent decor, extensive gardens, and famous Hall of Mirrors.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ],
            [
                'name' => 'The Kremlin',
                'location' => 'Moscow, Russia',
                'yearly_visitors' => 2500000,
                'description' => "The Kremlin is a historic fortress and palace complex located in the center of Moscow, Russia. It was built in the 15th century and has served as the seat of power for the Russian government for centuries, with several important buildings and churches located within its walls.",
                'published_at'=> Carbon::now()->addHours(3)->toDateTimeString(),
                'active'=> true,
                'categorie_id' => 3
            ]
        ];

        DB::table('tourism_places')->insert($data);
    }
}
