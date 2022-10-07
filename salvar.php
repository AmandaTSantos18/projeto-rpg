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
    $comando = $pdo -> prepare("INSERT INTO personagem(nome, jogador, origem, classe, trilha, elemento, patente, pm, xp) VALUES(:personagem,:jogador,:origem,:classe,:trilha,:elemento,:patente,:pm,:xp)");
    $comando->bindValue(":personagem",$personagem); 
    $comando->bindValue(":jogador",$jogador);   
    $comando->bindValue(":origem",$origem);                                     
    $comando->bindValue(":classe",$classe);    
    $comando->bindValue(":trilha",$trilha);  
    $comando->bindValue(":elemento",$elemento);                                     
    $comando->bindValue(":patente",$patente);                              
    $comando->bindValue(":pm",$pm);    
    $comando->bindValue(":xp",$xp);    
    $comando->execute();                               

    header("Location:tela4lista.html");
?>