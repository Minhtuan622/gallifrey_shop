<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Random\RandomException;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws RandomException
     */
    public function definition(): array
    {
        return [
            'admin_id' => random_int(1, 31),
            'title' => fake()->jobTitle(),
            'content' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'status' => random_int(1, 2),
            'published_at' => fake()->date(),
        ];
    }
}
