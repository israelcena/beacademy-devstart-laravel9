<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- Bootstrap CSS only -->
</head>
<body>
  @section('navbar')
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('users.index')}}">Cadastro de Usuário</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarID">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}" aria-current="page" href="{{route('users.index')}}">Home</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('users.create') ? 'active' : '' }}" aria-current="page" href="{{route('users.create')}}">Criar Usuários</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}" aria-current="page" href="{{route('posts.index')}}">Todos os posts</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('teams.index') ? 'active' : '' }}" aria-current="page" href="{{route('teams.index')}}">Todos os Times</a></li>
        </ul>
        <form class="d-flex" action="{{ route('users.search') }}" method="GET">
          <input class="form-control me-2" type="search" placeholder="Ex: Marcos" aria-label="Search" name='search'>
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
  @show

  @yield('body')
  
  {{-- @stack('scripts') --}}
  {{-- 
  Carrega scripts com na pagina
    
  @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
  @endpush

  para colocar no final 

  @prepend('scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
  @endprepend --}}
</body>
</html>