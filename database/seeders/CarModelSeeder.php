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
                'name'            => 'Model S',
                'production_year' => 2021,
                'car_type'        => 'Sedan',
                'most_request'    => true,
                'image'           => 'https://www.motoreetto.it/wp-content/uploads/2014/09/model-s-photo-gallery-06.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 2,
                'name'            => 'Mustang',
                'production_year' => 2020,
                'car_type'        => 'Coupe',
                'most_request'    => true,
                'image'           => 'https://preview.redd.it/m7xcj8eoygaa1.png?auto=webp&s=94f2570b7278a28e0514df8b15160e36ce7af9f6',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 3,
                'name'            => 'Civic',
                'production_year' => 2019,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 4,
                'name'            => 'Corolla',
                'production_year' => 2018,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 5,
                'name'            => 'A4',
                'production_year' => 2021,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 6,
                'name'            => '3 Series',
                'production_year' => 2020,
                'car_type'        => 'Sedan',
                'most_request'    => true,
                'image'           => 'https://cdn-datak.motork.net/configurator-imgs/cars/it/original/BMW/SERIES-3/44542_SEDAN-4-DOORS/bmw-serie3-sedan-front-view.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 3,
                'name'            => 'Accord',
                'production_year' => 2019,
                'car_type'        => 'Sedan',
                'most_request'    => false,
                'image'           => '',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 4,
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
                'name'            => 'Model 3',
                'production_year' => 2021,
                'car_type'        => 'Sedan',
                'most_request'    => true,
                'image'           => 'https://cdn.motor1.com/images/mgl/XB3oNV/s1/tesla-model-3-2022.jpg',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'brand_id'        => 7,
                'name'            => 'Charger',
                'production_year' => 2020,
                'car_type'        => 'Sedan',
                'most_request'    => true,
                'image'           => 'https://www.cavauto.com/wp-content/webp-express/webp-images/uploads/2022/08/dodge-charger-2021-srt-hellcat.jpeg.webp',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
        ]);
    }
}