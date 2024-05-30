<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //il fake() è un nuovo metodo laravel e sostituisce il $this->faker() che trovi su slot
        return [
            'name' => fake()->name(),
            'description' => fake()->words(rand(4,10), true)
        ];
    }
}
