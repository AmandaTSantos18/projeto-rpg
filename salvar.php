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

    $comando = $pdo -> prepare("INSERT INTO personagem(nome, jogador, fk_origem, fk_classe, fk_trilha, fk_elemento, fk_patente, pm, xp) 
                                VALUES(:nome,:jogador,:fk_origem,:fk_classe,:fk_trilha,:fk_elemento,:fk_patente,:pm,:xp)");
    
    $comando->bindValue(":nome",$personagem); 
    $comando->bindValue(":jogador",$jogador);   
    $comando->bindValue(":fk_origem",$origem);                                     
    $comando->bindValue(":fk_classe",$classe);    
    $comando->bindValue(":fk_trilha",$trilha);  
    $comando->bindValue(":fk_elemento",$elemento);                                     
    $comando->bindValue(":fk_patente",$patente);                              
    $comando->bindValue(":pm",$pm);    
    $comando->bindValue(":xp",$xp);    
    $comando->execute();                               

    header("Location:tela4lista.html");
?>