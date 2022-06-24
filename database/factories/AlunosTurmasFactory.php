<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alunos;
use App\Models\Turmas;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlunosTurmas>
 */
class AlunosTurmasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "turmas_id"=>$this->faker->randomElement(Turmas::pluck('id')->toArray()),
            "alunos_id"=>$this->faker->unique()->randomElement(Alunos::pluck('id')->toArray())

            //
        ];
    }
}
