<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory(3)->create();

        User::factory(10)->has(
            Post::factory(3)->has(
                Comment::factory(5)
            )
        )->create();

        Category::factory(5)->create();
        Tag::factory(10)->create();

        // Assign roles to users
        $roles = Role::all();
        User::all()->each(function ($user) use ($roles) {
            $user->roles()->attach($roles->random(rand(1, 3))->pluck('id')->toArray());
        });

        // Assign tags to posts
        $tags = Tag::all();
        Post::all()->each(function ($post) use ($tags) {
            $post->tags()->attach($tags->random(rand(1, 5))->pluck('id')->toArray());
        });
    }
}
