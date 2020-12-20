<?php

namespace Database\Factories;

use App\Models\thirdtenth;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThirdtenthFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = thirdtenth::class;

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