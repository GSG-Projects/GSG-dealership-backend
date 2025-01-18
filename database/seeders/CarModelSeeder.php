<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_models')->insert([
            ['brand_id' => 1, 'name' => 'Model S', 'production_year' => 2021, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 2, 'name' => 'Mustang', 'production_year' => 2020, 'car_type' => 'Coupe', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 3, 'name' => 'Civic', 'production_year' => 2019, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 4, 'name' => 'Corolla', 'production_year' => 2018, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 5, 'name' => 'A4', 'production_year' => 2021, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 6, 'name' => '3 Series', 'production_year' => 2020, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 3, 'name' => 'Accord', 'production_year' => 2019, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 4, 'name' => 'Camry', 'production_year' => 2018, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 1, 'name' => 'Model 3', 'production_year' => 2021, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
            ['brand_id' => 7, 'name' => 'Charger', 'production_year' => 2020, 'car_type' => 'Sedan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}