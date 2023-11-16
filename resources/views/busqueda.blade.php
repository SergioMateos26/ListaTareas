@extends('main')

@section('lista')
    <h4>Buscador</h4>
    <form action="/buscar" method='GET'>
        @csrf
        <input type="text" name="buscador">
        <input type="submit" name="submit" value="submit">
    </form>
@parent
@endsection


@section('tarea')
@endsection