@extends('template.users')
@section('title', 'Posts do usuário')
@section('body')
<div class="container mt-4">
  <h2>Listagem de posts do usuário</h2>
  <table class="table table-dark table-striped">
    <thead>
      <th scope="col">#</th>
      <th scope="col">Título do post</th>
      <th scope="col">Post</th>
      <th scope="col">Ativo</th>
      <th scope="col">Criado em</th>
      <th scope="col">Atualizado em</th>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <th scope="row">{{ $post->id}}</th>
        <td>{{ $post->title}}</td>
        <td>{{ $post->post}}</td>
        <td>{{ ($post->active) ? "Sim" : "Não" }}</td>
        <td>{{ $post->created_at}}</td>
        <td>{{ $post->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection