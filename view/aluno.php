<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
    <link rel="stylesheet" href="\src\index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

  <h1>Cadastro Alunos</h1>
  <form method="post" action="/controller/bd.php">
        <div class="form-row">
          <div class="col-md-6 offset-md-3">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" id="inputName"  name = "nome_aluno">
          </div> 
          <div class="col-md-6 offset-md-3">
            <label for="inputPassword4">Telefone</label>
            <input type="text" class="form-control" id="inputCellPhone" name = "telefone_aluno">
          </div>
          <div class="col-md-6 offset-md-3">
            <label>Id Curso</label>
            <input type="text" class="form-control" id="idcurso"  name = "id_curso">
          </div>
        </div>
        <div class = 'box'>
          <div class = 'boxChildren'>
              <select name="select" >
              <option value="deletar">Deletar</option>
              <option value="cadastrar" selected>Cadastrar</option>
            </select>
            <button type="submit" class="btn btn-primary" name='acao'>Prosseguir</button>
 
          </div>
        </div>
        
      </form>
      <div class = 'box'>
          <div class = 'boxChildren'>
            <?php
                include '.\model\include.php';
                $data = $conn->query("SELECT * from alunos");
                    echo "<div class= 'boxChildren'>";
                      echo "<table>";
                      echo "<tr>";
                      echo  "<th>Id</th>";
                      echo  "<th>Nome</th>";
                      echo  "<th>Curso</th>";
                      echo  "<th>Telefone</th>";
                      echo  "</tr>";
                      foreach($data as $row){
                      echo  "<tr>";
                      echo  "<td>".$row['idalunos']."</td>";
                      echo  "<td>".$row['nomeAluno']."</td>";
                      echo  "<td>".$row['telefoneAluno']."</td>";
                      echo  "<td>".$row['Cursos_idCursos']."</td>";
                      echo  "</tr>";
                    }
                    echo "</table>";
                echo "</div>";
            ?>
      </div>
    </div>
</body>
</html>