<?php
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_pericia, valor1, valor2, soma FROM pericias WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $_SESSION['id_personagem']);
    $comando->execute();


    if($comando->rowCount() >= 1)
    {
        $lista_pericias = $comando->fetchAll();
        unset($comando);
        unset($pdo);

        
    }else{
        unset($comando);
        unset($pdo);
        include("conexao.php");

        $comando = $pdo->prepare("SELECT nome_pericia, valor1, valor2, soma FROM pericias WHERE fk_personagem is null");
        $comando->execute();
        if($comando->rowCount() >= 1)
        {
            $lista_pericias = $comando->fetchAll();
        }
    }

    unset($comando);
    unset($pdo);
?>