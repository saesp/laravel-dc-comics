<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Termwind\Components\Dd;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // inserisco data falsi per testare 
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'dateOfBirth' => fake()->dateTimeBetween("-120 years", "now", NULL),
            'heigth' => fake()->boolean()
            ? fake()->numberBetween(40, 255)
            : null,
        ];
    }
}