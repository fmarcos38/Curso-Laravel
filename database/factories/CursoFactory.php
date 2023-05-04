<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use Illuminate\Support\Str;

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
        //creo variable para utilizar el nombre en -> name y slug
        $name = $this->faker->sentence();

        return [//defino los campos de la tabla
            'name' => $name, //es para q se llene con una oración
            'slug' => Str::slug($name, '-'), //este helper Str -> vuelve a minuscula y los espaciados los completa con un -
            'description' => $this->faker->paragraph(),//es para q se llene con un parrafo
            'categoria' => $this->faker->randomElement(['Desarrollo web', 'diseño web'])//es para q tome uno de dos posibles valores
        ];
    }
}
