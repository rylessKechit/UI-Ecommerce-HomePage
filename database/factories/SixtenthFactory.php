<?php

namespace Database\Factories;

use App\Models\sixtenth;
use Illuminate\Database\Eloquent\Factories\Factory;

class SixtenthFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = sixtenth::class;

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