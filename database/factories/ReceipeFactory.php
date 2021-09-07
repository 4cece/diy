<?php

namespace Database\Factories;

use App\Models\Receipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(rand(2,8), true),
            'content' => $this->faker->sentence(8),
            "total_quantity" => $this->faker->randomFloat(0, 30, 1000),
            'user_id'=>$this->faker->numberBetween(1, 5),
            'level_id'=>$this->faker->numberBetween(1, 3)

        ];
    }
}
