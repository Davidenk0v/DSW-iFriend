@extends("layouts.master")

@section("title", "Crear nuevo usuario")

@section("content")
<form method="post" action="{{$router->generate('user_post')}}">
  <div class="mb-3">
    <label for="input_name" class="form-label">Name</label>
    <input type="text" class="form-control" id="input_name" name="name">
    <div id="nameHelp" class="form-text">Introduce your name</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else. NEVER</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection