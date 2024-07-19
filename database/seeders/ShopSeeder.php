<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Shop;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('fr_FR');

       $shop = Shop::create([
           'name' => $faker->sentence(2),
           'address' => $faker->address,
           'email' => $faker->email,
           'phone' => $faker->phoneNumber,
           'holder' => strtoupper($faker->sentence(3)),
           'bic' => strtoupper(Str::random(8)),
           'iban' => $faker->iban,
           'bank' => $faker->sentence(2),
           'bank_address'=>$faker->address,
           'facebook' => $faker->url,
           'home' => $faker->sentence(3),
           'home_infos' => $faker->text,
           'home_shipping' => $faker->text,

       ]);
    }
}
