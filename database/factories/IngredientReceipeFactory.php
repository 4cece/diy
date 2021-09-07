<?php

namespace Database\Factories;

use App\Models\IngredientReceipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientReceipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = IngredientReceipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'receipe_id'=>$this->faker->numberBetween(1, 5),
            'ingredient_id'=>$this->faker->numberBetween(1, 5),
            'quantity'=>$this->faker->numberBetween(1, 500)
        ];
    }
}
