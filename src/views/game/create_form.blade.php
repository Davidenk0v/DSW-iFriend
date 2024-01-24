@extends("layouts.master")

@section("title", "Crear nueva partida")

@section("content")
<form method="post" action="{{$router->generate('game_post')}}">
  <div class="mb-3">
    <label for="input_name" class="form-label">Name game</label>
    <input type="text" class="form-control" id="input_name" name="name">
    <div id="nameHelp" class="form-text">Introduce your game name</div>
  </div>
  <div class="mb-3">
    <label for="id_admin" class="form-label">Admin ID</label>
    <input type="text" class="form-control" id="id_admin" name="id_admin">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else. NEVER</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection