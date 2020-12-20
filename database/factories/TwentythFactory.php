<?php

namespace Database\Factories;

use App\Models\twentyth;
use Illuminate\Database\Eloquent\Factories\Factory;

class TwentythFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = twentyth::class;

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