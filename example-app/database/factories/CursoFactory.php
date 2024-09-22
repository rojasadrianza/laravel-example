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
            'name' => $this->faker->sentence(), //Aqui le indico que se llene con una linea
            'descripcion' => $this->faker->paragraph(), //Aqui le indico que se llene con un parrafo
            'categoria' => $this->faker->randomElement(['Diseno web', 'Diseno Grafico'])
        ];
    }
}
