<?php
    include("conexao.php");

    /* PROCURANDO EQUIPAMENTO */
    $comando = $pdo -> prepare("SELECT nome_equipamento, dano, critico, espaco, fk_tipo, fk_categoria, fk_alcance, fk_municao FROM equipamentos WHERE id_equipamentos = :id_equipamentos");
    $comando->bindValue(":id_equipamentos", $_SESSION['id_equipamentos']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $equipamento = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    $i = 0;
    while ($i < 1){
    foreach ($equipamento as $id) {
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_municao FROM municao WHERE id_municao=:id_municao");
    $comando->bindValue(":id_municao", $id['fk_municao']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $municao = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");
    $comando = $pdo -> prepare("SELECT distancia FROM alcance WHERE id_alcance=:id_alcance");
    $comando->bindValue(":id_alcance", $id['fk_alcance']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $alcance = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_categoria FROM categorias WHERE id_categorias=:id_categorias");
    $comando->bindValue(":id_categorias", $id['fk_categoria']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $categorias = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_tipo FROM tipo_equip WHERE id_tipo_equip=:id_tipo_equip");
    $comando->bindValue(":id_tipo_equip", $id['fk_tipo']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $tipo = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
    $i++;

    }}
?>