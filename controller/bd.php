<?php
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> ';
    echo '<link rel="stylesheet" href="\src\index.css">';
    #error_reporting(0);
    include 'functionsBD.php';
    #Coletando variaveis 
    $acao = $_POST['select'];
    $nome_aluno = $_POST['nome_aluno'];
    $telefone_aluno = $_POST['telefone_aluno'];
    $id_curso_aluno = $_POST['id_curso'];
    
    $nome_curso = $_POST["nome_curso"];
    $carga_horaria = $_POST["carga_horaria"];

    $nome_turma = $_POST['nome_turma'];
    $data_inicio = $_POST["data_inicio"];
    $data_fim = $_POST["data_fim"];
    $id_curso_turma = $_POST["id_cursoTurma"];

    $emailUser = $_POST['emailCadastro'];
    $senhaUser = $_POST['senhaCadastro'];
    $nomeUser = $_POST['nomeCadastro'];
    $sobrenomeUser = $_POST['sobrenomeCadastro'];
    $telefoneUser = $_POST['telefoneCadastro'];
    

    if($nome_aluno != null and $acao == 'cadastrar'){
      insereAluno($nome_aluno,$telefone_aluno , $id_curso_aluno );
      echo "<h1>Aluno Cadastrado com Sucesso!</h1>";
      echo "<br><br><br>";
      echo "<br><br><br>";
      echo "<div class='box'>";
      echo "<div class='boxChildren'>";
      echo "<a href='..//index.php' class='btn btn-primary'>Pagina Inicial</a>";
      echo "</div>";
      echo "</div>";
    }
    if ( $nome_aluno != null and $acao == 'deletar'){
      deletaAluno($nome_aluno);
      echo "<h1>Aluno Excluido com Sucesso!</h1>";
      echo "<br><br><br>";
      echo "<br><br><br>";
      echo "<div class='box'>";
      echo "<div class='boxChildren'>";
      echo "<a href='..//index.php' class='btn btn-primary'>Pagina Inicial</a>";
      echo "</div>";
      echo "</div>";
    }
    if($nome_curso != null and $acao == 'cadastrar'){
      insereCurso($nome_curso, $carga_horaria);
      echo "<h1>Curso cadastrado com sucesso!</h1>";
      echo "<br><br><br>";
      echo "<br><br><br>";
      echo "<div class='box'>";
      echo "<div class='boxChildren'>";
      echo "<a href='..//index.php' class='btn btn-primary'>Pagina Inicial</a>";
      echo "</div>";
      echo "</div>";
    }
    if ( $nome_curso != null and $acao == 'deletar'){
      deletaCurso($nome_curso);
      echo "<h1>Curso Excluido com Sucesso!</h1>";
      echo "<br><br><br>";
      echo "<br><br><br>";
      echo "<div class='box'>";
      echo "<div class='boxChildren'>";
      echo "<a href='..//index.php' class='btn btn-primary'>Pagina Inicial</a>";
      echo "</div>";
      echo "</div>";
    }
    if($data_inicio != null and $acao == 'cadastrar'){
      insereTurma($nome_turma, $data_inicio, $data_fim, $id_curso_turma);
      echo "<h1>Turma cadastrada com sucesso!</h1>";
      echo "<br><br><br>";
      echo "<br><br><br>";
      echo "<div class='box'>";
      echo "<div class='boxChildren'>";
      echo "<a href='..//index.php' class='btn btn-primary'>Pagina Inicial</a>";
      echo "</div>";
      echo "</div>";
    }
    if ($nome_turma != null and $acao == 'deletar'){
      deletaturma($nome_turma);
      echo "<h1>Turma Excluida com Sucesso!</h1>";
      echo "<br><br><br>";
      echo "<div class='box'>";
      echo "<div class='boxChildren'>";
      echo "<a href='..//index.php' class='btn btn-primary'>Pagina Inicial</a>";
      echo "</div>";
      echo "</div>";}

?>

<?php
  if($emailUser != null){
    cadastroUser($emailUser, $senhaUser, $nomeUser, $sobrenomeUser, $telefoneUser );
    echo "<h1>Conta Criada com sucesso!</h1>";
    echo "<br><br><br>";
    echo "<br><br><br>";
    echo "<div class='box'>";
    echo "<div class='boxChildren'>";
    echo "<a href='..//index.php' class='btn btn-primary'>Pagina Inicial</a>";
    echo "</div>";
    echo "</div>";
  }
?>