<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos_notas', function (Blueprint $table) {
            $table->id();
            $table-> foreignId('alunos_id')->constrained();
            $table->foreignId('disciplina_id')->constrained();
            // TODO acrescentar campo de ano e vincular a tabela de turma
            $table->string('unidade');
            $table->float('projeto');
            $table->float('teste');
            $table->float('prova');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos_notas');
    }
};
