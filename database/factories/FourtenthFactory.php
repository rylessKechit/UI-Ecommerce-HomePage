<?php

namespace Database\Factories;

use App\Models\fourtenth;
use Illuminate\Database\Eloquent\Factories\Factory;

class FourtenthFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = fourtenth::class;

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