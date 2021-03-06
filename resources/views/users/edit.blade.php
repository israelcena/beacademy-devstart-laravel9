@extends('template.users')
@section('title', "Editar Usuário {{ $user->name }}" )
@section('body')
<div class="container">  
  @if($errors->any())  
    @foreach($errors->all() as $error)
    <div class="alert alert-danger fade show" role="alert">
    Erro: <strong>{{ $error }}</strong>
    </div>
    @endforeach
  @endif
  <form class="row g-3" method="POST" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="col-md-12">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control" id="password" name="password">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="email" class="form-label">E-mail</label>
    <div class="input-group">
      <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" aria-describedby="email" required>
      <div class="invalid-feedback">
       Por Favor coloque um email válido.
      </div>
    </div>
  </div>
    <div class="col-md-12">
    <label for="image" class="form-label">Foto: </label>
    <div class="input-group">
      <input type="file" class="form-control" id="image" name="image" aria-describedby="photo" value="{{ $user->image }}">
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Eu aceito com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar para prosseguir 
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-info" type="submit">Editar</button>
  </div>
</form>
</div>
@endsection