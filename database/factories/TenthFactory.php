<?php

namespace Database\Factories;

use App\Models\tenth;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenthFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tenth::class;

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