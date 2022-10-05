<?php
    include("conexao.php");

    $personagem = $_POST["personagem"];
    $jogador = $_POST["jogador"];
    $origem = $_POST["origem"];
    $classe = $_POST["classe"];
    $trilha = $_POST["trilha"];
    $elemento = $_POST["elemento"];
    $patente = $_POST["patente"];
    $xp = $_POST["xp"];
    $pm = $_POST["pm"];
    $comando = $pdo -> prepare("INSERT INTO personagem(nome, jogador, pm, xp) VALUES(:nome,:jogador,:pm,:xp)");
    $comando->bindValue(":nome",$personagem); 
    $comando->bindValue(":jogador",$jogador);                                     
    $comando->bindValue(":pm",$pm);    
    $comando->bindValue(":xp",$xp);    
    $comando->execute();                               

    header("Location:tela4lista.html");
?>