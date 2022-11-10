<?php
    include("conexao.php");

    session_start();
    $id = $_GET["id"];

    /* PROCURANDO PERSONAGEM */
    $comando = $pdo -> prepare("SELECT nome_equipamento, dano, critico, espaco, fk_tipo, fk_categoria, fk_alcance, fk_municao FROM personagem WHERE id_equipamentos = :id_equipamentos");
    $comando->bindValue(":id_equipamentos", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_perso = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

?>