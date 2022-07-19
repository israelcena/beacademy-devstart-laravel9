@extends('template.users')
@section('title', 'Página não encontrada!')
@section('body')
<div class="container h-100 text-center my-4 d-flex justify-content-center align-items-center flex-column">
<h1 class="mt-4">404! - Página não encontrada!</h1>
<p class="mt-4">Você tentou acessar um endereço inválido</p>
<a href="/" class="btn btn-lg btn-secondary mt-4">Voltar para Home</a>
</div>
@endsection