<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'summary' => fake()->text(100),
            'title' => fake()->text(50),
            'user_id' => User::inRandomOrder()->first(),
            'content' => fake()->text(800),

        ];
    }
}
