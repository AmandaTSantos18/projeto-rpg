<?php 
    include("conexao.php");

    $email = $_POST["email"];
    $set_senha = $_POST["senha"];

    $comando = $pdo->prepare("SELECT id_usuario, is_adm, senha FROM usuario WHERE email = :email");

    $comando->bindValue(":email", $email);
    $comando->execute();   

    if($comando->rowCount() == 1)
    {
        $resultado = $comando->fetch();

        if ( $resultado['senha'] == md5($set_senha)) 
        {
            session_start();
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['is_adm'] = $resultado['is_adm'];
            $_SESSION['loggedin'] = true;

            //verifica se o usuario conectado é administrador para mostrar a mensagem.
            if ($resultado['is_adm'] == 1) {
            header("location: fichaadm.php");
            }
            else
            {
                header("location: tela4lista.html");
            }
        }
        else
        {
            echo("Email ou Senha incorreto!");
        }
    }
    else
    {
        echo("Email ou Senha incorreto!");
    }
?> 