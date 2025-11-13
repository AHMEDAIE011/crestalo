<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
            HeaderImageSeeder::class,
            TeamSeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            OneCategorySeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            ContactSeeder::class,
            RelatedSiteSeeder::class,
       ]);
    }
}
