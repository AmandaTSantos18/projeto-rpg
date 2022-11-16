<?php
    include("conexao.php");

    $id = $_GET["id"];

    $comando = $pdo -> prepare("DELETE FROM equipamentos WHERE id_equipamentos = $id;");
    $comando -> execute();

    header("location:listequipadm.php")
?>