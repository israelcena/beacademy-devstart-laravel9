@extends('template.users')
@section('title', 'Usuário Não Encontrado')
@section('body')
  <div class="container">
    <p>Usuário não encontrado</p>
    <a class="btn btn-info text-white" href="{{ route('users.index') }}">Voltar para index</a>
  </div>