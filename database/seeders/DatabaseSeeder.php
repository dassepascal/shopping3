<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Order;
use App\Models\Address;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // PermissionSeeder::class,
            // RoleSeeder::class,
            // SuperAdminSeeder::class,

            ShopSeeder::class,
            PageSeeder::class,
            ProductSeeder::class,
            CountrySeeder::class,
            RangeSeeder::class,
            ColissimoSeeder::class,
            StateSeeder::class,
            PageSeeder::class,
        ]);

        User::factory()
            ->count(20)
            ->has(Address::factory()->count(random_int(1, 5)))
            ->create();

        // $user = User::find(1);
        // $user->admin = true;
        // $user->save();

        Order::factory()
        ->count(30)
        ->create();
    }
}
