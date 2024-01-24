@extends("layouts.master")

@section("title", "Lista de Partidas")

@section("content")
<div class="d-flex flex-row-reverse">
  <form method="post" action="{{$router->generate('game_post')}}">
    <input type=" " class="form-control" id="input_name" name="name" placeholder="Introduce el nombre de la partida...">
    <input type="submit" value="Crear Partida" class="btn btn-primary">
  </form>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Id admin</th>
      <th scope="col">Creado</th>
      <th scope="col">Actualizado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @forelse  ($games as $game)
      <tr>
        <th scope="row">{{$game->id}}</th>
        <td>{{$game->name}}</td>
        <td>{{$game->id_admin}}</td>
        <td>{{$game->created_at}}</td>
        <td>{{$game->updated_at}}</td>
        <td>
          {{-- <a class="btn btn-warning" href="{{$router->generate('game_edit', ["id" => $game->id])}}"><i class="bi bi-pencil-fill"></i></a> --}}
          {{-- <a class="btn btn-danger" href="{{$router->generate('game_delete', ["id" => $game->id])}}"><i class="bi bi-trash-fill"></i></a> --}}
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center bg-danger text-white">No hay Partidas</td>
      </tr>
    @endforelse
  </tbody>
</table>


@endsection

