<?php
    include("conexao.php");

    $id = $_GET["id"];

    session_start();
    $_SESSION['id_personagem'] = $id;
    $_SESSION['selected'] = true;
?>