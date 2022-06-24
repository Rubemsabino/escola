<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alunos;
use App\Models\Disciplina;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlunosNotas>
 */
class AlunosNotasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alunos_id'=>$this->faker->unique()->randomElement(Alunos::pluck('id')->toArray()),
            'disciplina_id'=>$this->faker->randomElement(Disciplina::pluck('id')->toArray()),
            'unidade'=>$this->faker->unique()->randomElement(['1º','2º','3º','4º',]),
            'projeto'=>$this->faker->randomDigit(),
            'teste'=>$this->faker->randomDigit(),
            'prova'=>$this->faker->randomDigit(),
        ];
    }
}
