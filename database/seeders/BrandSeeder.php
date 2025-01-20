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
                'image' => 'https://cdn.freelogovectors.net/svg09/toyota-logo-freelogovectors.net_.svg',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Aston Martin',
                'image' => 'https://upload.wikimedia.org/wikipedia/it/thumb/5/5b/Logo_della_Aston_Martin.svg/2560px-Logo_della_Aston_Martin.svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Bentley',
                'image' => 'https://cdn.worldvectorlogo.com/logos/bentley.svg',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Mercedes',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Mercedes-Logo.svg/2048px-Mercedes-Logo.svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Bugatti',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Bugatti_Logo.png/800px-Bugatti_Logo.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Cadillac',
                'image' => 'https://pngimg.com/uploads/cadillac/cadillac_PNG42.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Lexus',
                'image' => 'https://cdn.freelogovectors.net/wp-content/uploads/2023/04/lexus-logo-06-freelogovectors.net_.png',
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
                'name' => 'Ferrari',
                'image' => 'https://upload.wikimedia.org/wikipedia/it/thumb/0/04/Logo_della_Ferrari_S.p.A..svg/125px-Logo_della_Ferrari_S.p.A..svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Fiat',
                'image' => 'https://upload.wikimedia.org/wikipedia/it/thumb/9/9e/Logo_della_Fiat.svg/2048px-Logo_della_Fiat.svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Honda',
                'image' => 'https://www.freeiconspng.com/thumbs/honda-logo-png/honda-logo-png-picture-20.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Jeep',
                'image' => 'https://seeklogo.com/images/J/jeep-logo-791B3B66B2-seeklogo.com.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Kia',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Kia-logo.png/800px-Kia-logo.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Hyundai',
                'image' => 'https://cdn.freelogovectors.net/wp-content/uploads/2023/05/hyundai-logo-04-freelogovectors.net_.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Lamborghini',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/d/df/Lamborghini_Logo.svg',
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
                'name' => 'Subaru',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Subaru_logo_%28transparent%29.svg/2560px-Subaru_logo_%28transparent%29.svg.png',
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
                'name' => 'Mazda',
                'image' => 'https://cdn.freelogovectors.net/svg05/mazda-logo.svg',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Alafromeo',
                'image' => 'https://upload.wikimedia.org/wikipedia/it/thumb/c/c7/Alfa_Romeo_2015.svg/2048px-Alfa_Romeo_2015.svg.png',
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ];

        DB::table('brands')->insert($brands);
    }
}