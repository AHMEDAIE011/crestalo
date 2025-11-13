<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\OneCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = ['Kitchen accessories' , 'Dressing Accessories' , 'Drawer Slide' ,'Kitchen accessories_2' , 'Dressing Accessories_2' , 'Drawer Slide_2' , 'Drawer Slide_3' ];
        $images = ['assets/front/images/resource/service-1.jpg','assets/front/images/resource/service-2.jpg','assets/front/images/resource/service-3.jpg',
                    'assets/front/images/resource/service-1.jpg','assets/front/images/resource/service-2.jpg','assets/front/images/resource/service-3.jpg','assets/front/images/resource/service-1.jpg'];
    
        $date = now(); // أفضل من fake()->date()

        foreach ($data as $index => $item) {
            $oneCategory = OneCategory::inRandomOrder()->first();

            // لو مفيش بيانات في one_categories، نتأكد الأول
            if ($oneCategory) {
                Category::create([
                    'name'            => $item,
                    'desc'=>fake()->paragraph(3),
                    'name_ar'         => 'عربي',
                    'slug'            => Str::slug($item),
                    'status'          => 1,
                    'image'          => $images[$index],
                    'created_at'      => $date,
                    'updated_at'      => $date,
                    'one_category_id' => $oneCategory->id, // ✅ بدون فاصلة زيادة
                ]);
            }
        }
    }
}
