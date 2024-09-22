<?php

namespace Database\Seeders;
use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::factory(50)->create();
        /*$curso2 = new Curso();
        $curso2->name = 'Java';
        $curso2->descripcion = "Haciendo el curso de java ";
        $curso2->categoria = "Desarrollo ";
        $curso2->save();
        $curso3 = new Curso();
        $curso3->name = 'PHP';
        $curso3->descripcion = "Haciendo el curso de PHP ";
        $curso3->categoria = "Desarrollo ";
        $curso3->save();
        $curso4 = new Curso();
        $curso4->name = 'C#';
        $curso4->descripcion = "Haciendo el curso de C# ";
        $curso4->categoria = "Desarrollo ";
        $curso4->save();*/
    }
}
