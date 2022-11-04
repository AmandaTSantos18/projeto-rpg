<?php
    include("conexao.php");
    $personagem = $_GET['personagem'];
    $comando = $pdo -> prepare("SELECT nome_pericia, valor1, valor2, soma FROM pericias WHERE fk_personagem = :fk_personagem");
    session_start();
    $comando->bindValue(":fk_personagem", $personagem);

    if($comando->rowCount() >= 1)
    {
        $lista_pericias = $comando->fetchAll();
        unset($comando);
        unset($pdo);
    }else{
        unset($comando);
        unset($pdo);
        include("conexao.php");

        $comando = $pdo->prepare("SELECT nome_pericia, valor1, valor2, soma FROM pericias WHERE fk_personagem = null;");
        $comando->execute();
        if($comando->rowCount() >= 1)
        {
            $lista_pericias = $comando->fetchAll();
        }
    }

    unset($comando);
    unset($pdo);
?>