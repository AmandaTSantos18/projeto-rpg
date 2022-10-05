<?php 
    include("conexao.php");

    $email = $_POST["email"];
    $set_senha = password_hash( $_POST['senha'], PASSWORD_DEFAULT );

    $comando = $pdo->prepare("SELECT id_usuario, is_adm, senha FROM usuario WHERE email = :email");

    $comando->bindValue(":email", $email);
    $comando->execute();   

    if($comando->rowCount() == 1)
    {
        $resultado = $comando->fetch();

        if ( password_verify( $_POST['senha'], $set_senha ) )
        {
            session_start();
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['is_adm'] = $resultado['is_adm'];
            $_SESSION['loggedin'] = true;

            header("location:tela4lista.html");
        }
        else
        {
            echo("Email ou Senha incorreto:" . $set_senha);
            echo("<br>");
            echo($resultado['senha']);
        }
    }
    else
    {
        echo("Email ou Senha incorreto!");
    }
?> 