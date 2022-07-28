<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Professores;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turmas>
 */
class TurmasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->unique()->randomElement(['1º ano','2º ano','3º ano','4º ano','5º ano','6º ano','7º ano','8º ano','9º ano',]),
            "id_professor"=>$this->faker->unique()->randomElement(Professores::pluck('id')->toArray())
        ];
    }
}
