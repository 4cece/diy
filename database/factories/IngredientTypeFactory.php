<?php

namespace Database\Factories;

use App\Models\IngredientType;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = IngredientType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(1, true),
        ];
    }
}
