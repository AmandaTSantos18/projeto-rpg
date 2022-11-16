<?php
    include("conexao.php");

    /* PROCURANDO PERSONAGEM */
    $comando = $pdo -> prepare("SELECT nome_equipamento, dano, critico, espaco, fk_tipo, fk_categoria, fk_alcance, fk_municao FROM personagem WHERE id_equipamentos = :id_equipamentos");
    $comando->bindValue(":id_equipamentos", $_SESSION['id_equipamento']);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $equipamento = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

?>