<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <header>
        <a href="contact.html">Contato</a>
        <h1>Meus OvO</h1>
        <a href="index.html">Login</a>
    </header>
    <section>
        <nav class="navform">
                <form action="" method="POST" class="form" name="form">
                    <div>
                        <h1 style="font-size:20pt;">Criar conta</h1>
                    </div>
                    <div>
                        <label for="nome_usuario" class="form-label">Nome de usuário</label>
                        <input type="text" class="form-control" id="nome_usuario">
                    </div>
                    <div>
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="nome">
                    </div>
                    <div>
                        <label for="dt_nascimento" class="form-label">Data</label>
                        <input type="date" class="form-control" id="dt_nascimento" aria-describedby="emailHelp">
                    </div>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div>
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha">
                    </div>
                    <div>
                        <input type="submit" name="usuario" id="entrar" value="cadastrar">
                    </div>
                </form>
        </nav>
    </section>
</body>
</html>

<?php

    include('config.php');

    if($_POST)
    {
        if(isset($_POST['usuario']))
        {

            $resultado = cadastrarUsuario($_POST['nome_usuario'],$_POST['nome'],$_POST['dt_nascimento'],$_POST['email'],$_POST['senha']);

            header('location: home.php');
        }else{

            echo "Erro ao cadastrar usuário";

        }
    }

?>
