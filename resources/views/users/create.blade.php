@extends('template.users')
@section('title', 'Criar Usuário')
@section('body')
<form class="row g-3 needs-validation" method="post" action="{{route('users.store')}}">
  @csrf
  <div class="col-md-12">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control" id="password" name="password" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="email" class="form-label">E-mail</label>
    <div class="input-group">
      <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
      <div class="invalid-feedback">
       Por Favor coloque um email válido.
      </div>
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
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div>
</form>