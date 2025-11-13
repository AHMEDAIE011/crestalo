<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Helen', 'Andro', 'Layla', 'Body', 'Hans', 'Jake'];
        $images = [
            'assets/front/images/resource/team-1.jpg',
            'assets/front/images/resource/team-2.jpg',
            'assets/front/images/resource/team-3.jpg',
            'assets/front/images/resource/team-4.jpg',
            'assets/front/images/resource/team-5.jpg',
            'assets/front/images/resource/team-6.jpg',
        ];

        $date = now(); // أفضل من fake()->date()

        foreach ($data as $index => $item) {
            // $oneCategory = OneCategory::inRandomOrder()->first();

            // هنا بنحدد قيمة show حسب الفهرس
            $showValue = ($index <= 2) ? 1 : 0;

            Team::create([
                'name' => $item,
                'jop' => 'Design',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://www.twitter.com/',
                'email' => 'email@gmail.com',
                'insagram' => 'https://www.instagram.com/',
                'phone' => '01222333434',
                'image' => $images[$index],
                'show' => $showValue,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }
    }
}
