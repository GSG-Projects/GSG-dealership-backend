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
            [
                'name' => 'Toyota',
                'image' => 'https://www.freepnglogos.com/uploads/toyota-logo-png/toyota-logo-transparent-background-famous-logos-3.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Honda',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Honda_Logo.svg/2000px-Honda_Logo.svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Ford',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c7/Ford-Motor-Company-Logo.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Chevrolet',
                'image' => 'https://logos-world.net/wp-content/uploads/2021/03/Chevrolet-Logo.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Nissan',
                'image' => 'https://images.seeklogo.com/logo-png/9/2/nissan-logo-png_seeklogo-99769.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Audi',
                'image' => 'https://free-png.ru/wp-content/uploads/2021/07/free-png.ru-21-370x277.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'BMW',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/BMW.svg/2048px-BMW.svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Ferrari',
                'image' => 'https://upload.wikimedia.org/wikipedia/it/thumb/0/04/Logo_della_Ferrari_S.p.A..svg/125px-Logo_della_Ferrari_S.p.A..svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ];

        DB::table('brands')->insert($brands);
    }
}