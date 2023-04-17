<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = ['nome','turno','carga_horaria'];


    public function alunoCurso(){
        return $this->belongsTo(AlunoCurso::class, 'id', 'id_curso' );
    }
}
