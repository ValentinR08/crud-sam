<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modelo>
 */
class ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'apellido' => fake()->lastName(),
            'fecha_nacimiento' => fake()->date(),
            'genero' => fake()->gender(),
            'edad' => fake()->numberBetween(1, 100),
        ];
    }
}
