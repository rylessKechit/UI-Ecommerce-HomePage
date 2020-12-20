<?php

namespace Database\Factories;

use App\Models\four;
use Illuminate\Database\Eloquent\Factories\Factory;

class FourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = four::class;

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
