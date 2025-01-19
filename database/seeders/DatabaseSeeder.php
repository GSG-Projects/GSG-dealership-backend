<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BrandSeeder::class,
            CarModelSeeder::class,
            CarSeeder::class,
            OptionalSeeder::class,
            MessageSeeder::class,
            PreventiveSeeder::class,
            WishListSeeder::class,
        ]);
    }
}