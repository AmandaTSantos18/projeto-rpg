<?php
    include("conexao.php");

    session_start();

    $comando=$pdo->prepare("SELECT nome, email FROM usuario WHERE id_usuario=:id_usuario");
    $comando->bindValue(":id_usuario", $_SESSION['id_usuario']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $qual_usua = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>