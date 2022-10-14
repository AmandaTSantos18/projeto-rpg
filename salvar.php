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

    $comando = $pdo -> prepare("INSERT INTO personagem(nome,jogador,is_padrao,fk_origem,fk_classe,fk_trilha,fk_elemento,fk_patente,pm,xp,fk_usuario) 
                                                VALUES(:nome,:jogador,:is_padrao,:fk_origem,:fk_classe,:fk_trilha,:fk_elemento,:fk_patente,:pm,:xp,:fk_usuario)");
    
    $comando->bindValue(":nome",$personagem); 
    $comando->bindValue(":jogador",$jogador);   
    $comando->bindValue(":fk_origem",$origem);                                     
    $comando->bindValue(":fk_classe",$classe);    
    $comando->bindValue(":fk_trilha",$trilha);  
    $comando->bindValue(":fk_elemento",$elemento);                                     
    $comando->bindValue(":fk_patente",$patente);                              
    $comando->bindValue(":pm",$pm);    
    $comando->bindValue(":xp",$xp); 

    session_start();
    $comando->bindValue(":fk_usuario",$_SESSION['id_usuario']);
    $comando->bindValue(":is_padrao",$_SESSION['is_adm']);

    $comando->execute();                               

    header("Location:tela3login.php");