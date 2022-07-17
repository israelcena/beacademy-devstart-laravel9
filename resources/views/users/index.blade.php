@extends('template.users')
@section('title', 'Listagem dos Usuários')
@section('body')
<div class="container">
  <h1 class="mt-4">Listagem de Usuários</h1>
  <table class="table table-striped mt-4">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Foto</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Qtd de Posts</th>
        <th scope="col">Criado em</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</td>
        <td>
          @if($user->image)
          <img width="50px" class="rounded-circle" src="{{ asset("/storage/$user->image") }}" alt="{{ $user->name }}" />
          @else
          <img width="50px" class="rounded-circle" src="{{ asset("/storage/profile/usuario.jpg") }}" alt="{{ $user->name }}" />
          @endif
        </td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->posts->count() }}</td>
        <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
        <td>
          <div class="btn-group">
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">Visualisar</a>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="justify-content-center pagination">
    {{ $users->links('pagination::bootstrap-4') }}
  </div>
</div>
@endsection

{{-- @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
  @endpush

  para colocar no final 

  @prepend('scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
  @endprepend --}}