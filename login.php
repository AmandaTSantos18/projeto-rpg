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
            session_name();
            session_start();
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['is_adm'] = $resultado['is_adm'];
            $_SESSION['loggedin'] = true;

            if ($resultado['is_adm'] == 1) {
            header("location: listapersoadm.php");
            }
            else
            {
                header("location: tela4lista.php");
            }
        }
        else
        {
            echo('<script> alert("Email ou Senha incorreto!");
            window.open("tela3login.php","_self");
            </script>');
        }
    }
    else
    {
        echo('<script> alert("Email ou Senha incorreto!");
        window.open("tela3login.php","_self");
        </script>');
    }
?> 