<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['name' => 'Toyota'],
            ['name' => 'Honda'],
            ['name' => 'Ford'],
            ['name' => 'Chevrolet'],
            ['name' => 'Nissan'],
            ['name' => 'Audi'],
            ['name' => 'BMW'],
            ['name' => 'Dodge'],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->updateOrInsert(
                ['name' => $brand['name']],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}