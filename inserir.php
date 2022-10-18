<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

   if($nome && $email){
       $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
       $sql->bindValue(':email', $email);
       $sql->execute();


        if( $sql->rowCount() === 0 )
        {
            $comando = $pdo -> prepare("INSERT INTO usuario(nome, email, senha) VALUES(:nome,:email,:senha)");
            $comando->bindValue(":nome",$nome); 
            $comando->bindValue(":email",$email);                                     
            $comando->bindValue(":senha",$senha);    
            $comando->execute(); 
            header("Location:tela3login.php");  
            exit;
        } else {
            echo ('<script> alert("E-mail já cadastrado.");
            window.open("tela2cadastro.php","_self");
            </script>');
    }   
    }else
    {
        echo ('<script> alert("Insira as informações.");
        window.open("tela2cadastro.php","_self");
        </script>');
        exit;
    }

?>