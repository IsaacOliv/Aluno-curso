@extends('layouts.app')

@section('conteudo')
<style>
    .btn-acoes{
        width: 100px;
        margin-bottom: 3px;
    }
</style>


    <a class="btn btn-primary mt-3" href="{{route('cursos.create')}}">Criar Curso</a>
    <div class="text-center mb-3">
        <h1>Faculdade Pe de Valsa</h1>
    </div>
<hr>
    <div class="mt-2">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Turno</th>
                <th scope="col">Carga horaria</th>
                <th scope="col">Açoes</th>
            </tr>
            </thead>
                @foreach ($cursos as $curso)
                <tr>
                    <td>{{$curso->nome}}</td>
                    <td>{{$curso->turno}}</td>
                    <td>{{$curso->carga_horaria}}</td>
                    <td>
                        <div>
                            <a href="{{route('gerenciar', $curso->id)}}" class="btn btn-warning btn-acoes">Gerenciar</a>
                        </div>
                        <div>
                            <a href="{{route('cursos.edit', $curso->id)}}" class="btn btn-primary btn-acoes">Editar</a>
                        </div>
                        <form action="{{route('cursos.destroy', $curso->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <div>
                                <button type="submit" class="btn btn-danger btn-acoes">Excluir</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            <tbody>
            </tbody>
        </table>
    </div>

@endsection



















                {{-- @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->CPF}}</td>
                        <td>{{$aluno->email}}</td>
                        <td>
                            <div>
                                <a href="" class="btn btn-primary btn-acoes">Editar</a>
                            </div>
                            <div>
                               <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-acoes" type="submit">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach --}}
