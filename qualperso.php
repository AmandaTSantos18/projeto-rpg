<?php
    include("conexao.php");

    session_start();
    $id = $_SESSION['id_personagem'];

    /* PROCURANDO PERSONAGEM */
    $comando = $pdo -> prepare("SELECT nome, jogador, fk_origem, fk_classe, fk_trilha, fk_patente, fk_elemento, pm, xp FROM personagem WHERE id_personagem = :id_personagem");
    $comando->bindValue(":id_personagem", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_perso = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO ATRIBUTOS */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT vigor, agilidade, intelecto, presenca, forca, nex FROM atributos WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_atri = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO SAÚDE */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT vida, sanidade, esforco FROM saude WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_saude = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO ATUAL */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT vida_atual, sanidade_atual, esforco_atual, municao_atual FROM atual WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_atual = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO DEFESAS */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT passiva, bloqueio, esquiva FROM defesas WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_def = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO RESISTÊNCIAS */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT fisica, balistica, mental, sangue, morte, energia, conhecimento FROM resistencias_a_dano WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_resis = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO TEXTOS */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT escrito FROM textos WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $id);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_resis = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>