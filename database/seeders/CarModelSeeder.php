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
            [
                'brand_id'        => 1,
                'name'            => 'Camry',
                'production_year' => 2018,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 1,
                'name'            => 'Aygo X',
                'car_type'        => 'City car',
                'production_year' => '2022',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 2,
                'name'            => 'Model S',
                'production_year' => 2021,
                'car_type'        => 'Sedan',
                'most_request'    => true,
                'image'           => 'https://www.vcentrum.pl/wp-content/uploads/2023/07/DSC04299.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 13,
                'name'            => 'Civic',
                'production_year' => 2019,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 21,
                'name'            => 'A4',
                'production_year' => 2021,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 22,
                'name'            => '3 Series',
                'production_year' => 2020,
                'car_type'        => 'Sedan',
                'most_request'    => true,
                'image'           => 'https://www.bmw.co.th/content/dam/bmw/marketTH/bmw_co_th/All%20Models/3series/sedan-long-wheelbase-2023/1001_1680x756px.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 13,
                'name'            => 'Accord',
                'production_year' => 2019,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 2,
                'name'            => 'Model 3',
                'production_year' => 2021,
                'car_type'        => 'Sedan',
                'most_request'    => true,
                'image'           => 'https://www.shop4tesla.com/cdn/shop/articles/tesla-model-3-uber-230000-km-und-tausende-euro-gespart-956682.jpg?v=1728598029',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 25,
                'name'            => 'Charger',
                'production_year' => 2020,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => 'https://www.cavauto.com/wp-content/webp-express/webp-images/uploads/2022/08/dodge-charger-2021-srt-hellcat.jpeg.webp',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
        ]);
    }
}