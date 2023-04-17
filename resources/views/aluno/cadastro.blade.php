@extends('layouts.app')

@section('conteudo')

    <div class="text-center mb-3">
        <h1>Cadastro</h1>
    </div>
<hr>
    <div class="mt-2" style="width: 400px; margin:0 auto;" >
        <form action="{{route('alunos.store')}}" method="POST">
            @csrf
            <div class="mb-3" >
              <label for="exampleInputEmail1" class="form-label">nome</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nome">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">CPF</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="CPF">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">email</label>
              <input type="email" class="form-control" id="exampleInputPassword1" name="email">
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
    </div>

@endsection
