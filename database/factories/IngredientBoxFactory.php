<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientBoxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity'=>$this->faker->numberBetween(1, 200),
            'expiration_date'=>$this->faker->dateTimeBetween('now', '+ 3 month', null),
            'user_id'=>$this->faker->numberBetween(1, 5),
            'ingredient_id'=>$this->faker->numberBetween(1, 100),


        ];
    }
}
