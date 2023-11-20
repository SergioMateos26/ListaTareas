<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
    nav{
        border-color:grey;
        padding:1% !important;
        border-radius:calc(0.375rem - 1px);
    }
    table{
        
    }
</style>

<body>

@section('nav')
    <header>
        <nav class="navbar navbar-expand-xs navbar-light bg-light border">
            <h1 class="navbar-brand" href="#">Lista de Tareas</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Lista Tareas</a>
                    <a class="nav-item nav-link" href="/task">Nueva Tarea</a>
                    <a class="nav-item nav-link" href="/busqueda">Busqueda</a>
                </div>
            </div>
        </nav>
    </header>
<br>
<br>
@endsection
@yield('nav')

@section('tarea')
    <div class="card">
        <div class="card-header"><strong>Nueva tarea</strong></div>
        <div class="card-body">
            <h5 class="card-title">Tarea</h5>
            <form action="/tarea" method="POST">
                @csrf
                <input type="text" name="nombre">
                <input class="bg-primary" type="submit" name="submit" value="Añadir tarea">
                    @error('nombre')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </form>
        </div>
    </div>
<br>
<br>
@endsection
@yield('tarea')


@section('lista')
    <div class="card">
        <div class="card-header"><strong>Lista de Tareas</strong></div>
        <div class="card-body">
            <table>
                <tr>
                    <th>Tareas</th>
                    <th>Acciones</th>
                </tr>
@foreach($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->nombre }}</td>
                    <td>@each('boton', [$tarea], 'tarea')</td>
                </tr>
@endforeach

            </table>
        </div>
    </div>
@endsection
@yield('lista')

  </body>
</html>
