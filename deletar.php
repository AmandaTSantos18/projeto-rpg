<?php
    include("conexao.php");

    $nome= $_GET['nome'];
    $jogador=$_GET['jogador'];

    //comando sql.
    session_start();

    $comando = $pdo->prepare("DELETE FROM personagem WHERE nome = :nome AND jogador = :jogador AND fk_usuario = :fk_usuario;");
    $comando->bindValue(":nome",$nome); 
    $comando->bindValue(":jogador",$jogador); 
    $comando->bindValue(":fk_usuario",$_SESSION['id_usuario']); 
    $comando->execute();

    header("Location:tela4lista.php");
?>
