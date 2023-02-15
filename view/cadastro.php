<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<form method="post" action="/controller/bd.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name = "emailCadastro">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name = "senhaCadastro">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nome</label>
    <input type="text" class="form-control" name = "nomeCadastro">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Sobrenome</label>
    <input type="text" class="form-control" name = "sobrenomeCadastro">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Telefone</label>
    <input type="text" class="form-control" name = "telefoneCadastro">
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</body>
</html>