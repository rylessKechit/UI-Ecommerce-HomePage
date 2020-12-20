<?php

namespace Database\Factories;

use App\Models\five;
use Illuminate\Database\Eloquent\Factories\Factory;

class FiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = five::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(1),
            'price' => $this->faker->numberBetween(100, 5000),
        ];
    }
}