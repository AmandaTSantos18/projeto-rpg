<?php
    include("conexao.php");

    $email = $_POST["nome"];
    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);
    $comando = $pdo -> prepare("INSERT INTO usuario (nome, email, senha) VALUES(:nome,:email,:senha )");
    $comando->bindValue(":nome",$nome); 
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);    
    $comando->execute();                               

    header("Location:tela1inicio.html");
?>