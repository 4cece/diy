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
use App\Models\IngredientFeat;
use App\Models\IngredientType;
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
        \App\Models\User::factory(5)->create();
        \App\Models\Article::factory(50)->create();
        \App\Models\Feature::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Level::factory(3)->create();
        \App\Models\Receipe::factory(50)->create();
        \App\Models\Step::factory(10)->create();
        \App\Models\IngredientType::factory(10)->create();
        \App\Models\Ingredient::factory(100)->create();
        \App\Models\IngredientBox::factory(100)->create();
        \App\Models\IngredientFeat::factory(10)->create();
        \App\Models\IngredientReceipe::factory(150)->create();
        \App\Models\Comment::factory(10)->create();

    }
}
