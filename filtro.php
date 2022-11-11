<?php
    /* PROCURANDO ORIGEM */
    include("conexao.php");

    $comando=$pdo->prepare("SELECT * FROM origem");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $origens = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO CLASSE */
    include("conexao.php");

    $comando=$pdo->prepare("SELECT * FROM classe");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $classes = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO ELEMENTO */
    include("conexao.php");

    $comando=$pdo->prepare("SELECT * FROM elemento");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $elemento = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO PATENTE */
    include("conexao.php");

    $comando=$pdo->prepare("SELECT * FROM patente");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $patente = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO ARMA */
    include("conexao.php");

    $comando=$pdo->prepare("SELECT * FROM equipamentos");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $arma = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO TRILHA */
    include("conexao.php");

    $fk_classe=$_GET["codigo"];
    function trilha_por_classe($fk_classe){
        
        $comando=$pdo->prepare("SELECT * FROM trilha WHERE fk_classe=:fk_classe");
        $comando->bindValue(":fk_classe", $fk_classe);
        $comando->execute();

        if($comando->rowCount() >= 1)
        {
            $trilhas = $comando->fetchAll();
        }
        unset($comando);
        unset($pdo);

    }
?>