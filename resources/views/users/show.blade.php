@extends('template.users')
@section('title', 'Usuário {{ $user->name }}')
@section('body')
  <div>
    <h1>Central do Usuário</h1>
    <p>Olá {{ $user->name }}</p>
    <p>Seu email: {{ $user->email }}</p>
    <button class="btn btn-primary"><a class="text-white" href="{{ route('users.index') }}">Voltar</a></button>
  </div>