<?php

namespace Database\Factories;

use App\Models\IngredientBox;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientBoxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = IngredientBox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "quantity" => $this->faker->randomFloat(0, 30, 100),
            "expiration_date"=>$this->faker->date('Y-m-d', 'now'),
            'user_id' => $this-> faker->numberBetween(1, 5),
            'ingredient_id'=>$this->faker->numberBetween(1, 10)
        ];
    }
}
