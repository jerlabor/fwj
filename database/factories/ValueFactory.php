<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Value>
 */
class ValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'emoji' => $this->faker->emoji(),
            'sentiment_score' => $this->faker->numberBetween(1.0,10.0),
        ];
    }
}
