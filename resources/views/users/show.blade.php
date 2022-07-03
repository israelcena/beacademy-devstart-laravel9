<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Usuário {{ $user->name }}</title>
</head>
<body>
  <div>
    <h1>Central do Usuário</h1>
    <p>Olá {{ $user->name }}</p>
    <p>Seu email: {{ $user->email }}</p>
    <button><a href="{{ route('users.index') }}">Voltar</a></button>
  </div>
</body>
</html>