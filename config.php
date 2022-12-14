<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'meusovo';

    $conexao = new mysqli($host, $user, $password, $database);

    if($conexao->connect_errno)
    {
        echo 'Erroooo';
    }

    function cadastrarUsuario($_nome_usuario,$nome,$dt_nascimento,$email,$senha){

        $sql = 'INSERT INTO usuario(nome_usuario,nome, dt_nascimento, email, senha) VALUES ("'.$nome_usuario.'","'.$nome.'","'.$dt_nascimento.'","'.$email.'","'.$senha.'")';

        $res = $GLOBALS['conexao']->query($sql);

        if($res)
        {

          echo "Usuário cadastrado com sucesso!";

        }else{

          echo "Erro ao cadastrar!";
          
        }
    }

?>