<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                ['categorie' => 'Mountains'],
                ['categorie' => 'Beaches'],
                ['categorie' => 'Historical'],
                ['categorie' => 'Natural'],
            ];
        DB::table('categories')->insert($data);
    }
}
