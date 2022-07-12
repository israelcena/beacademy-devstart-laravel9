@extends('template.users')
@section('title', 'Posts do usuário')
@section('body')
<h1 class="mt-4">Usuário não encontrado!</h1>
<a href="{{route('users.index')}}" class="btn btn-primary mt-4">Voltar Para a Lista de Usuários</a>
@endsection