<?php

namespace Database\Seeders;

use App\Models\Range;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Range::insert([
            ['max' => 1],
            ['max' => 2],
            ['max' => 3],
            ['max' => 100],
        ]);
    }
}

