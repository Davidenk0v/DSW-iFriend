@extends("layouts.master")

@section("title", "Lista de Partidas")

@section("content")
<div class="d-flex flex-row-reverse">
  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-controller"></i> Crear Partida</a>
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
          <a class="btn btn-warning" href="{{$router->generate('game_edit', ["id" => $game->id])}}"><i class="bi bi-pencil-fill"></i></a> 
          <a class="btn btn-danger" href="{{$router->generate('game_delete', ["id" => $game->id])}}"><i class="bi bi-trash-fill"></i></a>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center bg-danger text-white">No hay Partidas</td>
      </tr>
    @endforelse
  </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Partida</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="form-floating" method="post" action="{{$router->generate('game_post')}}">
          <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Nombre de la partida">
          <label for="floatingInput">Nombre de la partida</label>
          <div class="d-flex flex-row-reverse">
            <input type="submit" value="Crear" class="m-2 btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

