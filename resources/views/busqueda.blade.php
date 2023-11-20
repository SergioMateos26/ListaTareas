@extends('main')

@section('lista')
<div class="card">
    <div class="card-header"><strong>Buscador</strong></div>
        <div class="card-body">
        <form action="/buscar" method='GET'>
            @csrf
            <input type="text" name="buscador">
            <input type="submit" name="submit" value="submit">
        </form>
        </div>
</div>
<br>
<br>
@parent
@endsection


@section('tarea')
@endsection