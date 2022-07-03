<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Usuários</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  
</head>
<body class="container">
  <div>
    <h1>Listagem de Usuários</h1>
    <table class="table">
      <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Criado em</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
          <td><div class="btn-group"><a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">Visualisar</a><a class="btn btn-warning btn-sm">Editar</a><a class="btn btn-danger btn-sm">Excluir</a></div></td>
        </tr>
      @endforeach
       </tbody>
    </table>
  </div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>