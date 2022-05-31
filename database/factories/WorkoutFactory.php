<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workout>
 */
class WorkoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'program_id' => \App\Models\Program::factory(),
            'url' => $this->faker->url(),
            'training_type' => $this->faker->word(),
            'muscle_group' => $this->faker->url(),
            'week' => $this->faker->numberBetween(1,4),
            'day' => $this->faker->numberBetween(1,7),
            'rpe' => $this->faker->numberBetween(1,10),
            'completed_on' => $this->faker->date(),
        ];
    }
}
