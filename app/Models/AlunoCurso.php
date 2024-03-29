<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoCurso extends Model
{
    use HasFactory;
    protected $table = 'aluno_cursos';
    protected $fillable = ['id_aluno','id_curso'];

    public function alunos(){
        return $this->hasMany(Aluno::class, 'id', 'id_aluno');
    }
    public function curso(){
        return $this->hasMany(Curso::class, 'id', 'id_curso');
    }
}


