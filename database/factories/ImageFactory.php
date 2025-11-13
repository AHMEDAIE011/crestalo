<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paths = [
            'uploads/posts/postSeeder/gallery/1.jpg', 'uploads/posts/postSeeder/gallery/2.jpg','uploads/posts/postSeeder/gallery/3.jpg' , 'uploads/posts/postSeeder/gallery/4.jpg' , 'uploads/posts/postSeeder/gallery/5.jpg'];
        return [
            'path'=>fake()->randomElement($paths),
        ];
    }


}
