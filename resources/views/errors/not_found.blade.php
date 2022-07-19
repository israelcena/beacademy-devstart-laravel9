@extends('template.users')
@section("title", "$msg")
@section('body')
<div class="container text-center my-4">
<h1 class="mt-4">Não encontrado!</h1>
<p class="h3 text-danger">{{ $msg }}</p>
<p>Sorry =/</p>
<a href="/" class="btn btn-lg btn-secondary mt-4">Voltar para Home</a>
</div>
@endsection