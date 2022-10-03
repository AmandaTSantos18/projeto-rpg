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

        if($resultado['senha'] == MD5($set_senha))
        {
            session_start();
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['is_adm'] = $resultado['is_adm'];
            $_SESSION['loggedin'] = true;

            header("location:ficha.html");
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