<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{$router->generate('index')}}">iFriend</a>
    <a class="navbar-brand" href="{{$router->generate('user')}}">Usuarios</a>
    if(@isset($_SESSION['id']))
    <span>{{$_SESSION['user']}}</span>
    <a class="navbar-brand" href="{{$router->generate('logout')}}">Logout</a>
    @else
    <form class="d-flex" role="login" method="post" action="{{$router->generate('validate')}}">
      <input class="form-control me-2" type="text" placeholder="user" aria-label="User">
      <input class="form-control me-2" type="password" placeholder="password" aria-label="Password">
      <button class="btn btn-outline-success" type="submit">Login</button>
    </form>
    @endif
                                <!-- busqueda -->
      <!-- <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form> -->
  </div>
</nav>
{{-- @include("layouts.alert") --}}