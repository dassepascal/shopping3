<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = [
            ['livraisons', 'Livraisons',],
            ['mentions-legales', 'Mentions légales',],
            ['conditions-generales-de-vente', 'Conditons générales de vente',],
            ['politique-de-confidentialite', 'Politique de confidentialité',],
            ['respect-environnement', 'Respect de l\'environnement',],
            ['mandat-administratif', 'Mandat administratif',],
        ];
        foreach($items as $item) {
            \App\Models\Page::create([
                'title' => $item[1],
                'slug' => $item[0],
                'text'=>fake()->paragraph(10),

            ]);
        }

    }
}
