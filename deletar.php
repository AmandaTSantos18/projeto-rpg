<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando = $pdo->prepare('DELETE FROM personagem WHERE nome = :codigo;');
    $comando->bindValue(":codigo",$codigo); 
    $comando->execute();

    header("Location: lista_clientes.php");
?>
