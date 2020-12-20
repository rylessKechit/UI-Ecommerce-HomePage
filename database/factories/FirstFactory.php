<?php

namespace Database\Factories;

use App\Models\first;
use Illuminate\Database\Eloquent\Factories\Factory;

class FirstFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = first::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(1),
        ];
    }
}