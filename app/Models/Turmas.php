<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    use HasFactory;
    protected $table="turmas";

    public function AlunoTurma() {
        return $this->hasMany(AlunosTurmas::class);
    }

    public function Professor() {
        return $this->hasOne(Professores::class,'id','id_professor');
    }
}
