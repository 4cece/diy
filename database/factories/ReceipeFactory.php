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
            'Name' => $this->faker->words(rand(2,8), true),
            'Content' => $this->faker->sentence(8),
            "Total quantity" => $this->faker->randomFloat(0, 30, 1000),
        ];
    }
}
