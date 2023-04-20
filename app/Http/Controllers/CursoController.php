<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        if ($cursos) {
            return view('curso.index', compact('cursos'));
        }
        return view('curso.index')->with('error', 'Curso nao cadastrado');
    }
    public function create()
    {
        return view('curso.cadastro');
    }
    public function store(Request $request)
    {
        $curso = $request->all();
        if($curso){
            Curso::create($curso);
            return redirect()->route('cursos.create')->with('sucesso', 'Curso criado com sucesso');
        }
    }
    public function edit ($id)
    {
        $curso = Curso::find($id);

        return view('curso.edit', compact('curso'));
    }
    public function update(Request $request, $id)
    {

        $curso = Curso::find($id);

        $curso->update($request->all());
        return redirect()->route('cursos.dashboard')->with('sucesso', 'Curso editado com sucesso');
    }
    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect()->route('cursos.dashboard')->with('sucesso', 'Curso deletado com sucesso');
    }
}
