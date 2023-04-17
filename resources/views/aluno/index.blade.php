@extends('layouts.app')

@section('conteudo')
<style>
    .btn-acoes{
        width: 100px;
        margin-bottom: 3px;
    }
</style>


    <a class="btn btn-primary mt-3" href="{{route('alunos.create')}}">Cadastrar aluno</a>
    <div class="text-center mb-3">
        <h1>Faculdade Pe de Valsa</h1>
    </div>
<hr>
    <div class="mt-2">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
                <th scope="col">Açoes</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->CPF}}</td>
                        <td>{{$aluno->email}}</td>
                        <td>
                            <div>
                                <a href="{{route('alunos.edit', $aluno->id)}}" class="btn btn-primary btn-acoes">Editar</a>
                            </div>
                            <div>
                               <form action="{{route('alunos.destroy', $aluno->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-acoes" type="submit">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
