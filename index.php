<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <form action = ""  method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" name = "email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
    <a href="view\cadastro.php" class = "btn btn-primary">Cadastro</a>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</body>

<?php
    error_reporting(0);
    include '.\model\include.php';
    include '.\controller\functionsBD.php';
    $usuario = $_POST['email'];
    $senha = $_POST['password'];
    if($usuario != null){
        buscaUser($usuario, $senha);
    }
?>
</html>