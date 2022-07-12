@extends('template.users')
@section('title', "Usuário {$user->name}")
@section('body')
  <div class="container justify-center">
    <h1 class="mt-4">Central do Usuário</h1>
    <p>Olá {{ $user->name }},</p>
    <div><img class="rounded-circle mb-4" width="100px" src="{{ asset("/storage/$user->image") }}" alt="{{ $user->name }}"/></div>
    <p>Email Cadastrado: {{ $user->email }}</p>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
      @method('DELETE')
      @csrf
      <a class="btn btn-warning text-black" href="{{ route('users.edit', $user->id) }}">Editar</a>
      <a class="btn btn-primary text-white" href="{{ route('users.index') }}">Voltar</a>
      <button class="btn btn-danger text-white" type="submit">Excluir</button>
      <a class="btn btn-info" href="{{ route('posts.showOne', $user->id) }}">Visualizar Posts</a>
    </form>
  </div>
  @endsection