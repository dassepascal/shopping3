<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superAdmin@admin.com',
            'password' => Hash::make('superAdmin1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Product Manager',
            'email' => 'productManager@admin.com',
            'password' => Hash::make('productManager1234')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
