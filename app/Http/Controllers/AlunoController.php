<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){

        $alunos = Aluno::all();
        if ($alunos) {
            return view('aluno.index', compact('alunos'));
        }
        return view('aluno.index')->with('error', 'Nenhum aluno cadastrado');
    }

    public function create()
    {
        return view('aluno.cadastro');
    }

    public function store(Request $request)
    {
        $aluno = $request->all();
        if ($aluno) {
            Aluno::create($aluno);
            return redirect()->route('alunos.dashboard')->with('sucesso', 'Aluno cadastrado');
        }

    }
    public function destroy($id){

        $aluno = Aluno::find($id);
        if ($aluno) {
            $aluno->delete();
            return redirect()->route('alunos.dashboard')->with('sucesso', 'Aluno deletado');
        }
        return redirect()->route('alunos.dashboard')->with('error', 'Erro ao deletar aluno ');

    }
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        return view('aluno.edit', compact('aluno'));

    }
    public function update(Request $request, $id){

        $aluno = Aluno::find($id);

        $aluno->update($request->all());
        return redirect()->route('alunos.dashboard')->with('sucesso', 'Registro atualizado');
        }

}
