<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Ingredient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'content' => $this->faker->sentences(2, true),
            'img' => $this->faker->imageUrl(600, 480),
            'ingredient_type_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
