<form action="/tarea/{{$tarea->id}}" method='POST'>
                            @csrf
                            @method('DELETE')
<input class="bg-danger" type="submit" name="submit" onclick="return confirm('Seguro que quieres eliminar la tarea?')" value="Eliminar">
</form>