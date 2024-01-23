@extends("layouts.master")

@section("title", "Modificar usuario")

@section("content")
<form method="post" action="{{$router->generate('user_update')}}">
  <div class="mb-3">
    <label for="input_name" class="form-label">Name</label>
    <input type="text" class="form-control" id="input_name" name="name" 
    @if(isset($user))
    value="{{$user->name}}"
    @endif
    >
    <div id="nameHelp" class="form-text">Introduce your name</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" 
    @if(isset($user))
    value="{{$user->mail}}"
    @endif
    >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else. NEVER</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" 
    @if(isset($user))
    value="{{$user->password}}"
    @endif
    >
    <input type="hidden" name="id" value="{{$user->id}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection