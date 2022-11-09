<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_personagem, nome FROM personagem WHERE is_padrao=:is_padrao");
    $comando->bindValue(":is_padrao", "1");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $padrao = $comando->fetchAll();
    }else{
        echo("Não há personagens criados.");
    }
    unset($comando);
    unset($pdo);
?>