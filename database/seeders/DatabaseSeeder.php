<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $category = Category::factory(2)->create();

        $user = User::factory()->create([
            "name" => "Tacitus Kilgore"
        ]);

        $user = User::factory()->create([
            "name" => "Jim Milton"
        ]);

        Post::factory(3)->create([
           "user_id" => $user->find(1),
           "category_id" => $category->find(1)
        ]);
        Post::factory(3)->create([
            "user_id" => $user->find(2),
            "category_id" => $category->find(2)
         ]);
    }
}
