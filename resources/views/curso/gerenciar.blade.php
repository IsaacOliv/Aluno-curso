@extends('layouts.app')

@section('conteudo')
    <div class="text-center mb-3">
        <h1>Gerenciar cursos - {{$curso->nome}}</h1>
    </div>
        <form action="{{route('vincular.aluno', $curso->id)}}" method="post">
            @csrf
            <div class="mt-2" style="width: 400px; margin:0 auto;" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cadastrar aluno</label>
                    <select name="id_aluno" id="" >
                        <option value="" selected >Selecione um aluno</option>
                        @foreach ($alunos as $aluno)
                            <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button  type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        <hr>

        <div class="mt-2">
            <table class="table">
                <thead>
                <tr>

                    <th scope="col">Alunos</th>
                    <th scope="col">Açoes</th>
                </tr>
                </thead>
                    @foreach ($alunosDoCurso as $aluno)
                        @foreach ($aluno->alunos as $aluno)
                        <tr>
                            <td>{{$aluno->nome}}</td>
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @method('delete')
                                    <div>
                                        <button type="submit" class="btn btn-danger btn-acoes">Excluir</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endforeach
                <tbody>
                </tbody>
            </table>
        </div>

@endsection
