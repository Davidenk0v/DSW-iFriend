<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{$router->generate('index')}}">iFriend</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    @isset($_SESSION['id'])
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{$router->generate('user')}}">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{$router->generate('game')}}">Partidas</a>
          </li>
        </ul>
    @endisset
    </div>
    <div class="d-flex flex-row-reverse">
    @isset($_SESSION['id'])
      <a class="btn btn-outline-danger" href="{{$router->generate('logout')}}">Logout</a>
    @else
      <form class="d-flex" role="login" method="post" action="{{$router->generate('validate')}}">
        <input class="form-control me-2" type="text" placeholder="User" aria-label="User" name="user">
        <input class="form-control me-2" type="password" placeholder="Password" aria-label="Password" name="password">
        <button class="btn btn-outline-primary" type="submit">Login</button>
      </form>
    @endif
    </div>
  </div>
</nav>