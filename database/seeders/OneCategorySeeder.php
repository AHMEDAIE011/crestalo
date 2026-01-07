<?php

namespace Database\Seeders;

use App\Models\OneCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OneCategorySeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Design 3D', 'Interior Design', 'furniture'];
        $dataAr = ['3D ديزاين', 'التصميم الداخلي', 'أثاث'];
        $date = now(); // أفضل من fake()->date لأنه بيرجع DateTime مضبوط

        foreach ($data as $index => $item) {
            OneCategory::create([
                'name'       => $item,
                'desc'=>fake()->paragraph(3),
                'name_ar'    => $dataAr[$index], // ✅ العنصر المقابل
                'slug'       => Str::slug($item),
                'status'     => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }
    }
}
