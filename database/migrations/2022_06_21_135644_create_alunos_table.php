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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('nomedamae',100);
            $table->string('nomedopai',100);
            $table->string('celular',30);
            $table->string('Data_nasc',30);
            $table->string('RG',30);
            $table->string('CPF',30);
            $table->string('ano_letivo',30);


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
        Schema::dropIfExists('alunos');
    }
};
