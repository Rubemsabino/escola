<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professores>
 */
class ProfessoresFactory extends Factory
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
            'celular'=>$this->faker->phone(),
            'formacao'=>$this->faker->randomElement(['Pedagogo','psicopedagogo','Letras']),

        ];
    }
}
