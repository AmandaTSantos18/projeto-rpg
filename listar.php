<?php
    include("conexao.php");

    session_start();
    $id = $_SESSION['id_usuario'];

    $comando = $pdo->prepare("SELECT id_personagem, nome, jogador FROM personagem WHERE fk_usuario=:fk_usuario;");
    $comando->bindValue(":fk_usuario", $id);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $personagens = $comando->fetchAll();
    }else{
        echo("Não há personagens criados.");
    }
    unset($comando);
    unset($pdo);
?>