<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'car_model_id' => 1,
                'brand_id' => 1,
                'base_price' => 25000.00,
                'warranty' => '3 years',
                'environmental_class' => 'Euro 6',
                'availability' => true,
                'engine_capacity' => 2000,
                'fuel_type' => 'Petrol',
                'power_kw' => 150,
                'transmission' => 'Manual',
                'color' => 'Red',
                'width' => 1800,
                'length' => 4500,
                'weight' => 1500,
                'seats_number' => 5,
                'doors_number' => 4,
                'image' => 'path/to/image.jpg',
                'description' => 'A reliable and efficient car.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'car_model_id' => 2,
                'brand_id' => 2,
                'base_price' => 30000.00,
                'warranty' => '5 years',
                'environmental_class' => 'Euro 6',
                'availability' => true,
                'engine_capacity' => 2500,
                'fuel_type' => 'Diesel',
                'power_kw' => 180,
                'transmission' => 'Automatic',
                'color' => 'Blue',
                'width' => 1900,
                'length' => 4700,
                'weight' => 1600,
                'seats_number' => 5,
                'doors_number' => 4,
                'image' => 'path/to/image.jpg',
                'description' => 'A powerful and comfortable car.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'car_model_id' => 3,
                'brand_id' => 3,
                'base_price' => 35000.00,
                'warranty' => '3 years',
                'environmental_class' => 'Euro 6',
                'availability' => true,
                'engine_capacity' => 3000,
                'fuel_type' => 'Petrol',
                'power_kw' => 200,
                'transmission' => 'Automatic',
                'color' => 'Black',
                'width' => 2000,
                'length' => 4800,
                'weight' => 1700,
                'seats_number' => 5,
                'doors_number' => 4,
                'image' => 'path/to/image.jpg',
                'description' => 'A luxurious and spacious car.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}