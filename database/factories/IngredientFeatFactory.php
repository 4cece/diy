<?php

namespace Database\Factories;

use App\Models\IngredientFeat;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFeatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = IngredientFeat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feature_id'=>$this->faker->numberBetween(1, 10),
            'ingredient_id'=>$this->faker->numberBetween(1, 10)
        ];
    }
}
