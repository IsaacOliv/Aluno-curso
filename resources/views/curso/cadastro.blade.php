@extends('layouts.app')

@section('conteudo')
    <div class="text-center mb-3">
        <h1>Cadastro de cursos</h1>
    </div>
        <form action="{{route('cursos.store')}}" method="post">
            @csrf
            <div class="mt-2" style="width: 400px; margin:0 auto;" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Turno</label>
                    <input type="text" class="form-control" id="turno" name="turno">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Carga horaria</label>
                    <input type="text" class="form-control" id="carga_horaria"  name="carga_horaria">
                </div>

                <button  type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
@endsection
