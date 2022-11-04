<?php
    include("conexao.php");

    $id = $_GET["id"];

    /* EXCLUINDO PERÍCIAS */
    $comando = $pdo -> prepare("DELETE FROM pericias WHERE fk_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);

    /* EXCLUINDO ATRIBUTOS  */
    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM atributos WHERE fk_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);
    
    /* EXCLUINDO DEFESAS */
    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM defesas WHERE fk_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);

    /* EXCLUINDO SAÚDE */
    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM saude WHERE fk_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);

    /* EXCLUINDO RESISTÊNCIAS A DANO */
    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM resistencias_a_dano WHERE fk_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);

    /* EXCLUINDO ATUAL */
    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM atual WHERE fk_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);

    /* EXCLUINDO TEXTOS */
    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM textos WHERE fk_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);

    /* EXCLUINDO PERSONAGEM */
    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM personagem WHERE id_personagem=$id");
    $comando->execute();

    unset($comando);
    unset($pdo);

    session_start();
    if($_SESSION['id_adm'] == 1)
    {
        header("location:listapersoadm.php");
    }else
    {
        header("location:tela4lista.php");
    }
?>