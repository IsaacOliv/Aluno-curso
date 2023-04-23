<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\AlunoCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoCursoController extends Controller
{
    public function index(){
        return view('index');
    }
    public function gerenciar($id)
    {
        $curso = Curso::find($id);
        $alunos = Aluno::get(); //to retornando os alunos para cadastro
        $alunosDoCurso = AlunoCurso::with('alunos')->get();
        return view('curso.gerenciar', compact('curso', 'alunos', 'alunosDoCurso'));
    }
    public function vincularAlunoCurso(Request $request, $id_curso)
    {
        $dados = [
            "id_aluno" => $request->id_aluno,
            "id_curso" => $id_curso
        ];
        $sucesso = AlunoCurso::create($dados);
        if ($sucesso) {
           return redirect()->back()->with('sucesso','Aluno vinculado');
        }
    }
}
