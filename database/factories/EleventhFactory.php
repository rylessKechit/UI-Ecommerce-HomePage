<?php

namespace Database\Factories;

use App\Models\eleventh;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleventhFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = eleventh::class;

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