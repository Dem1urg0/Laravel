<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->sentence(rand(2, 4)),
            'content' => fake()->paragraph(rand(2, 4)),
            'author' => fake()->name(),
            'category_id' => rand(1, 10),
            'private' => fake()->boolean(10),
        ];
    }
}
