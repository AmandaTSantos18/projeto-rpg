<?php
    include("conexao.php");

    $comando=$pdo->prepare("SELECT * FROM origem");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $origens = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");

    $comando=$pdo->prepare("SELECT * FROM classe");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $classes = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");

    $fk_classe=$_GET["classe"];
    $comando=$pdo->prepare("SELECT * FROM trilha WHERE fk_classe=:fk_classe");
    $comando->bindValue(":fk_classe", $fk_classe);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $trilhas = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>