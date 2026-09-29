<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'student_code' => fake()->unique()->numerify('6601####'),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'std_pgm_id' => fake()->numberBetween(1, 5),
        ];
    }
}