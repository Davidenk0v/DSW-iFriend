<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{$router->generate('index')}}">iFriend</a>
    <a class="navbar-brand" href="{{$router->generate('user')}}">Usuarios</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
{{-- @include("layouts.alert") --}}
