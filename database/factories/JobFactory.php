<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => '$' . fake()->numberBetween(30000, 100000),
            'employer_id' => \App\Models\Employer::factory(),
        ];
    }
}