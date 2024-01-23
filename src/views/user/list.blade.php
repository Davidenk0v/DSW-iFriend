@extends("layouts.master")

@section("title", "Lista de usuarios")

@section("content")
<div class="d-flex flex-row-reverse">
  <a class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Crear Usuario</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Creado</th>
      <th scope="col">Actualizado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @forelse  ($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->mail}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
        <td>
          <a class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
          <a class="btn btn-danger" href="{{$router->generate('user_delete', ["id" => $user->id])}}"><i class="bi bi-trash-fill"></i></a>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center bg-danger text-white">No hay usuarios</td>
      </tr>
    @endforelse
  </tbody>
</table>


@endsection

