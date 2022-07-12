@extends('template.users')
@section('title', 'Posts do usuário')
@section('body')
<div class="container mt-4">
  <h2 class="h2">Listagem todos os posts</h2>
  {{ $posts->links('pagination::bootstrap-5') }}
  <table class="table table-dark table-striped">
    <thead>
      <th scope="col">#</th>
      <th scope="col">Usuário</th>
      <th scope="col">Título do post</th>
      <th scope="col">Post</th>
      <th scope="col">Ativo</th>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <th scope="row">{{ $post->id}}</th>
        <td>{{ $post->user->name }}</td>
        <td>{{ $post->title}}</td>
        <td>{{ $post->post}}</td>
        <td>{{ ($post->active) ? "Sim" : "Não" }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="justify-content-center pagination">
  {{ $posts->links('pagination::bootstrap-4') }}
  </div>
</div>

@endsection