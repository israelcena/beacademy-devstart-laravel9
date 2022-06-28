<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Via cep</title>
</head>

<body>
  <div class="">
    <form action="{{ route('viacep.post') }}" method="post">
      @csrf
      <label for="cep">Numero do cep: </label>
      <input type="text" name="cep" id="cep" placeholder="22214-456">
      <button type="submit">Enviar</button>

    </form>
  </div>
</body>

</html>