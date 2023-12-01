<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //populate table productss
        DB::table('products')->insert([
            [
                'name'=> 'Oppo mobile',
                'price'=>"300",
                'description'=>'A smartphone with 8GB',
                'category'=>'mobile',
                'gallery'=>'https://cdn.tmobile.com/content/dam/t-mobile/en-p/cell-phones/apple/Apple-iPhone-15-Pro/Blue-Titanium/Apple-iPhone-15-Pro-Blue-Titanium-thumbnail.png'
            ],
            [
                'name'=> 'Iphone mobile',
                'price'=>"100",
                'description'=>'A smartphone with 8GB',
                'category'=>'mobile',
                'gallery'=>'https://e7.pngegg.com/pngimages/183/274/png-clipart-lg-electronics-smartphone-android-lte-30-minutes-gadget-magenta.png'
            ],
            [
                'name'=> 'Xiome mobile',
                'price'=>"150",
                'description'=>'A smartphone with 32GB',
                'category'=>'mobile',
                'gallery'=>'https://w7.pngwing.com/pngs/599/150/png-transparent-iphone-x-front-view-apple%E6%89%8B%E6%9C%BA-iphone-intelligent-mobile-phone-thumbnail.png'
            ],
            [
                'name'=> 'Smart TV',
                'price'=>"1000",
                'description'=>'A TV with ,uch more feature',
                'category'=>'tv',
                'gallery'=>'https://w7.pngwing.com/pngs/214/370/png-transparent-television-set-led-backlit-lcd-aoc-international-smart-tv-led-miscellaneous-television-rectangle.png'
            ]
        ]);
    }
}
