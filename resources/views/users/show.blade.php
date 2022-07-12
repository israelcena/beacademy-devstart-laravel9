@extends('template.users')
@section('title', "Usuário {$user->name}")
@section('body')
  <div>
    <h1>Central do Usuário</h1>
    <p>Olá {{ $user->name }}</p>
    <p>Seu email: {{ $user->email }}</p>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
      @method('DELETE')
      @csrf
      <a class="btn btn-warning text-black" href="{{ route('users.edit', $user->id) }}">Editar</a>
      <a class="btn btn-primary text-white" href="{{ route('users.index') }}">Voltar</a>
      <button class="btn btn-danger text-white" type="submit">Excluir</button>
    </form>
  </div>
  @endsection