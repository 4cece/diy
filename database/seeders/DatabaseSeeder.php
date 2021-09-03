<?php

namespace Database\Seeders;

use App\Models\Step;
use App\Models\Level;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Feature;
use App\Models\Receipe;
use App\Models\Category;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(2)->create();
        \App\Models\Article::factory(10)->create();
        \App\Models\Comment::factory(10)->create();
        \App\Models\Feature::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Level::factory(3)->create();
        \App\Models\Receipe::factory(10)->create();
    }
}
