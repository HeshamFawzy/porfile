<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(1),
            'sub_title' => fake()->paragraph(1),
            'desc' => fake()->text(512),
            'visibility' => fake()->boolean(),
            'arrangement' => fake()->boolean(),
        ];
    }
}
