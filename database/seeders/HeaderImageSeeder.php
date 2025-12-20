<?php

namespace Database\Seeders;

use App\Models\HeaderImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['assets/front/images/main-slider/image-1.jpg','assets/front/images/main-slider/image-2.jpg','assets/front/images/main-slider/image-3.jpg'];
        foreach ($images as $image) {
             HeaderImage::create([
            'title'=>'Architecture is a ',
            'title2'=>'Visual Art.',
            'desc'=>'The buildings speak for themselves',
            
            'title_ar'=>'Architecture is a ',
            'title2_ar'=>'Visual Art.',
            'desc_ar'=>'The buildings speak for themselves',
            'image'=>$image,
        ]);
        }
    }
}
