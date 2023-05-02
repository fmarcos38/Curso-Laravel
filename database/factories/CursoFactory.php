<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Curso::class; 

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(), //es para q se llene con una oración
            'description' => $this->faker->paragraph(),//es para q se llene con un parrafo
            'categoria' => $this->faker->randomElement(['Desarrollo web', 'diseño web'])//es para q tome uno de dos posibles valores
        ];
    }
}
