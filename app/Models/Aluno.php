<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';
    protected $fillable = ['nome','CPF','email'];


    public function alunoCurso(){
        return $this->belongsTo(AlunoCurso::class, 'id', 'id_aluno' );
    }
}
