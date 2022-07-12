<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;

    public function AlunoTurma() {
        return $this->hasOne(AlunosTurmas::class);
    }
}
