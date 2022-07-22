<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunosTurmas extends Model
{
    use HasFactory;

    public function aluno(){
        return $this->belongsTo(Alunos::class);
    }

    public function turma(){
        return $this->belongsTo(Turmas::class,'turmas_id','id');
    }
}
