<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $comando = $pdo -> prepare("INSERT INTO usuario(nome, email, senha) VALUES(:nome,:email,:senha)");
    $comando->bindValue(":nome",$nome); 
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);    
    $comando->execute();                               

    header("Location:tela3login.html");
?>