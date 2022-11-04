<?php
    include("conexao.php");

    session_start();

    $comando = $pdo -> prepare("DELETE FROM usuario WHERE id_usuario=:id_usuario");
    $comando->bindValue(":id_usuario",$_SESSION['id_usuario']); 

    
    $comando->execute();
    unset($comando);
    unset($pdo);
    header("Location:index.php");

?>