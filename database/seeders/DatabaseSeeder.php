<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Alunos::factory(20)->create();
         \App\Models\Professores::factory(20)->create();
         \App\Models\Disciplina::factory(8)->create();
         \App\Models\Turmas::factory(4)->create();
         \App\Models\AlunosTurmas::factory(3)->create();
         \App\Models\AlunosNotas::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
