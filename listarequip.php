<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_equipamentos, nome_equipamento, dano, critico, fk_tipo, fk_categoria, fk_alcance, fk_municao, espaco  FROM equipamentos;");

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_equipamentos = $comando->fetchAll();
    }else{
        echo("Não há equipamentos criados.");
    }

    unset($comando);
    unset($pdo);
?>