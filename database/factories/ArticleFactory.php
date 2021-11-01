<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(rand(2,8), true),
            'content' => $this->faker->sentence(8),
            'user_id' => $this-> faker->numberBetween(1, 5),
            'img'=> $this->faker->imageUrl(640, 480)

        ];
    }
}
