<?php
    include("conexao.php");

    $comando = $pdo -> prepare("DELETE FROM equipamentos WHERE id_equipamentos = :id");
    $comando->bindValue(":id",$id); 
    $comando->execute();

    header("Location:tela4lista.php");
?>