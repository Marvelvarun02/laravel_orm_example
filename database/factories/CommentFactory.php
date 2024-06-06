<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'body' => $this->faker->sentence,
            'user_id' => User::factory(),
            'post_id' => Post::factory(),
        ];
    }
}

