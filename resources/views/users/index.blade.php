@extends('template.users')
@section('title', 'Listagem dos Usuários')
@section('body')
    <h1>Listagem de Usuários</h1>
    <table class="table">
      <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Criado em</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</td>
          <td><img width="50px" class="rounded-circle" src="{{ asset("/storage/$user->image") }}" alt="{{ $user->name }}" /></td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
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
@endsection