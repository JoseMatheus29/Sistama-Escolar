<?php
    function insereAluno($nomeAluno, $telefoneAluno, $idCurso){
        include '.\model\include.php';
        $insert = $conn->query("INSERT into alunos (nomeAluno, telefoneAluno, Cursos_idCursos) values ('{$nomeAluno}', '{$telefoneAluno}', '{$idCurso}')");
    }
    function deletaAluno($nomeAluno){
        include '.\model\include.php';
        $deletar = $conn->query("DELETE from alunos Where nomeAluno = '{$nomeAluno}'");
    }
    function insereCurso($nomeCurso, $cargaHoraria){
        include '.\model\include.php';
        $insert = $conn->query("INSERT into cursos (nomeCurso, cargaHoraria) values ('{$nomeCurso}', '{$cargaHoraria}')");
    }
    function deletaCurso($nomeCurso){
        include '.\model\include.php';
        $deletar = $conn->query("DELETE from cursos Where nomeCurso = '{$nomeCurso}'");

    }
    function insereTurma($nomeTurma, $dataInicio, $dataFim, $idCursoTurma){
        include '.\model\include.php';
        $insert = $conn->query("INSERT into turmas (nometurma, dataInicio, dataFim, Cursos_idCursos) values ('{$nomeTurma}', '{$dataInicio}', '{$dataFim}', '{$idCursoTurma}')");

    }
    function deletaTurma($nomeTurma){
        include '.\model\include.php';
        $deletar = $conn->query("DELETE from turmas Where nometurma = '{$nomeTurma}'");
    }

    function cadastroUser($emailUser, $senhaUser, $nomeUser, $sobrenomeUser, $telefoneUser ){
        include '.\model\include.php';
        $insert = $conn->query("INSERT into user (email, senha, nome, sobrenome, telefone, ativo ) values ('{$emailUser}', AES_ENCRYPT('$senhaUser', 'abc'), '{$nomeUser}', '{$sobrenomeUser}','{$telefoneUser}', True )");
    }
    
    function buscaUser($usuario, $senha){
        include '.\model\include.php';
        $data = $conn->query("SELECT * from user WHERE email = '$usuario' AND cast(aes_decrypt(senha, 'abc')as char) = '{$senha}'");
        foreach($data as $row){
            header('Location:view\home.php');
        }
    }

?>