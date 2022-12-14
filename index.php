<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="contact.html">Contato</a>
        <h1>Meus OvO</h1>
        <a href="signup.php">Criar conta</a>
    </header>
    <section>
        <nav class="navform">
                <form>
                    <div>
                        <h1 style="font-size:20pt;">Faça login</h1>
                    </div>
                    <div>
                        <label for="login" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div>
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha">
                    </div>
                    <div>
                        <button id="entrar" class="btn btn-dark">Entrar</button>
                    </div>
                    <div>
                        <a id="linkazul" href="esquecisenha.html">Esqueci a senha</a>
                        <a id="linkazul" href="signup.html">Criar conta</a>
                    </div>
                </form>
        </nav>
    </section>
</body>
</html>

<?php
    include('config.php');

    if(isset($_POST['email']) || isset($_POST['senha']))
    {
        if(strlen($_POST['email']) == 0)
        {
            echo "Digite seu email!";
        } else if(strlen($_POST['senha']) == 0){
            echo "Digite sua senha!";
        } else{
            $email = $conexao->real_escape_string($_POST['email']);
            $senha = $conexao->real_escape_string($_POST['senha']);
        
            $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
        
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1)
            {
                $user = $sql_query->fetch_assoc();

                if(!isset($_SESSION))
                {
                    session_start();
                    $_SESSION['email'] = $_POST['email'];
                }


                header('location: home.php');
            } else{
                echo "Falha ao logar. E-mail e/ou senha incorretos!";
            }
        }
    }
?>