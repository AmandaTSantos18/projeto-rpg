<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    session_start();

    $comando = $pdo -> prepare("UPDATE usuario SET nome=:nome, email=:email, senha=:senha WHERE id_usuario=:id_usuario");
    $comando->bindValue(":nome",$nome); 
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);   
    $comando->bindValue(":id_usuario",$_SESSION['id_usuario']); 
    $comando->execute();
    header("Location:ficha.php");

?>