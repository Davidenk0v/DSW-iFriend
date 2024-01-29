@extends("layouts.master")

@section("title", "Modificar partida")

@section("content")
<form method="post" action="{{$router->generate('game_update')}}">
  <div class="mb-3">
    <label for="input_name" class="form-label">New name</label>
    <input type="text" class="form-control" id="input_name" name="name" 
    @if(isset($game))
    value="{{$game->name}}"
    @endif
    >
    <input type="hidden" name="id" value="{{$game->id}}">
    <div id="nameHelp" class="form-text">Introduce new name</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection