<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>


    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('alunos.dashboard')}}">Alunos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cursos.dashboard')}}">Cursos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div>
            @if (session('sucesso'))
                <div class="alert alert-success">
                    {{ session('sucesso') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-warning">
                    {{ session('error') }}
                </div>
            @endif
            @yield('conteudo')
          </div>

    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
