<?php

namespace Database\Seeders;

use App\Models\Colissimo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColissimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Colissimo::insert([
            ['country_id' => 1, 'range_id' => 1, 'price' => 7.25],
            ['country_id' => 1, 'range_id' => 2, 'price' => 8.95],
            ['country_id' => 1, 'range_id' => 3, 'price' => 13.75],
            ['country_id' => 1, 'range_id' => 4, 'price' => 0],
            ['country_id' => 2, 'range_id' => 1, 'price' => 15.5],
            ['country_id' => 2, 'range_id' => 2, 'price' => 17.55],
            ['country_id' => 2, 'range_id' => 3, 'price' => 22.45],
            ['country_id' => 2, 'range_id' => 4, 'price' => 0],
            ['country_id' => 3, 'range_id' => 1, 'price' => 15.5],
            ['country_id' => 3, 'range_id' => 2, 'price' => 17.55],
            ['country_id' => 3, 'range_id' => 3, 'price' => 22.45],
            ['country_id' => 3, 'range_id' => 4, 'price' => 0],
            ['country_id' => 4, 'range_id' => 1, 'price' => 27.65],
            ['country_id' => 4, 'range_id' => 2, 'price' => 38],
            ['country_id' => 4, 'range_id' => 3, 'price' => 55.65],
            ['country_id' => 4, 'range_id' => 4, 'price' => 0],
        ]);

    }
}
