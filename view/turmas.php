<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas</title>
    <link rel="stylesheet" href="\src\index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body>
<h1>Cadastro Turma</h1>
    <form method="post" action="/controller/bd.php">
        <div class="form-row">
          <div class="col-md-6 offset-md-3">
              <label for="inputEmail4">Nome Turma</label>
              <input type="text" class="form-control"  name = "nome_turma">
          </div> 
          <div class="col-md-6 offset-md-3">
            <label for="inputEmail4">Data Inicio</label>
            <input type="text" class="form-control"  name = "data_inicio">
          </div> 
          <div class="col-md-6 offset-md-3">
            <label for="inputPassword4">Data Fim</label>
            <input type="text" class="form-control"  name = "data_fim">
          </div>
          <div class="col-md-6 offset-md-3">
            <label for="inputPassword4">Id Curso</label>
            <input type="text" class="form-control" id="idcurso"  name = "id_cursoTurma">
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
                $data = $conn->query("SELECT * from turmas");
                    echo "<div class= 'boxChildren'>";
                      echo "<table>";
                      echo "<tr>";
                      echo  "<th>Id</th>";
                      echo  "<th>Nome Turma</th>";
                      echo  "<th>Data Inicio</th>";
                      echo  "<th>Data fim</th>";
                      echo  "<th>Id curso</th>";
                      echo  "</tr>";
                      foreach($data as $row){
                      echo  "<tr>";
                      echo  "<td>".$row['idTurmas']."</td>";
                      echo  "<td>".$row['nometurma']."</td>";
                      echo  "<td>".$row['dataInicio']."</td>";
                      echo  "<td>".$row['dataFim']."</td>";
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