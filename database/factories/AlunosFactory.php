<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alunos>
 */
class AlunosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name(),
            'nomedamae'=>$this->faker->name(),
            'nomedopai'=>$this->faker->name(),
            'celular'=>$this->faker->phone(),
            'Data_nasc'=>date('d/m/Y'),
            'RG'=>$this->faker->rg(),
            'CPF'=>$this->faker->cpf(),
            'ano_letivo'=>date('Y'),
        ];
    }
}
