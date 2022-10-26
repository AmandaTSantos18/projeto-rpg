<?php
    include("conexao.php");

    $id = $_GET["id"];

    $comando = $pdo -> prepare("DELETE FROM personagem WHERE id_personagem = $id;");
    $comando->execute();

    session_start();
    if($_SESSION['id_usuario'] == 1)
    {
        header("location:listapersoadm.php");
    }else
    {
        header("location:tela4lista.php");
    }
?>