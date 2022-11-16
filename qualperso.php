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

    $i = 0;
    while ($i < 1){
    foreach ($qual_perso as $id_p) {
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_origem FROM origem WHERE id_origem = :id_origem");
    $comando->bindValue(":id_origem", $id_p['fk_origem']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $origem = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_classe FROM classe WHERE id_classe = :id_classe");
    $comando->bindValue(":id_classe", $id_p['fk_classe']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $classe = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_trilha FROM trilha WHERE id_trilha = :id_trilha");
    $comando->bindValue(":id_trilha", $id_p['fk_trilha']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $trilha = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_elemento FROM elemento WHERE id_elemento = :id_elemento");
    $comando->bindValue(":id_elemento", $id_p['fk_elemento']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $ele = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    include("conexao.php");
    $comando = $pdo -> prepare("SELECT nome_patente FROM patente WHERE id_patente = :id_patente");
    $comando->bindValue(":id_patente", $id_p['fk_patente']);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $pat = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
    $i++;
    }}

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
    $comando = $pdo -> prepare("SELECT vida_atual, sanidade_atual, esforco_atual, municao_atual, deslocamento FROM atual WHERE fk_personagem = :fk_personagem");
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
    $comando=$pdo->prepare("SELECT fisica, balistica, mental, sangue, morte, energia, conhecimento FROM resistencias_a_dano WHERE fk_personagem = :fk_personagem");
    $comando->bindValue(":fk_personagem", $id);
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $qual_resis = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);

    /* PROCURANDO TEXTOS --- INVENTÁRIO */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT escrito FROM textos WHERE fk_personagem = :fk_personagem AND fk_tipo = :fk_tipo");
    $comando->bindValue(":fk_personagem", $id);
    $comando->bindValue(":fk_tipo", 1);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_inv = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
     /* PROCURANDO TEXTOS --- PROFICIÊNCIAS */
     include("conexao.php");
     $comando = $pdo -> prepare("SELECT escrito FROM textos WHERE fk_personagem = :fk_personagem AND fk_tipo = :fk_tipo");
     $comando->bindValue(":fk_personagem", $id);
     $comando->bindValue(":fk_tipo", 2);
     $comando -> execute();
 
     if($comando->rowCount() >= 1)
     {
         $qual_prof = $comando->fetchAll();
     }
     unset($comando);
     unset($pdo);
      /* PROCURANDO TEXTOS --- ATAQUES E DEFESAS DETALHADOS */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT escrito FROM textos WHERE fk_personagem = :fk_personagem AND fk_tipo = :fk_tipo");
    $comando->bindValue(":fk_personagem", $id);
    $comando->bindValue(":fk_tipo", 3);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_ataqedef = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
     /* PROCURANDO TEXTOS --- RITUAIS CONHECIDOS */
     include("conexao.php");
     $comando = $pdo -> prepare("SELECT escrito FROM textos WHERE fk_personagem = :fk_personagem AND fk_tipo = :fk_tipo");
     $comando->bindValue(":fk_personagem", $id);
     $comando->bindValue(":fk_tipo", 4);
     $comando -> execute();
 
     if($comando->rowCount() >= 1)
     {
         $qual_ritconh = $comando->fetchAll();
     }
     unset($comando);
     unset($pdo);
      /* PROCURANDO TEXTOS --- HABILIDADES */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT escrito FROM textos WHERE fk_personagem = :fk_personagem AND fk_tipo = :fk_tipo");
    $comando->bindValue(":fk_personagem", $id);
    $comando->bindValue(":fk_tipo", 5);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_habil = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
    /* PROCURANDO TEXTOS --- HISTÓRICO */
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT escrito FROM textos WHERE fk_personagem = :fk_personagem AND fk_tipo = :fk_tipo");
    $comando->bindValue(":fk_personagem", $id);
    $comando->bindValue(":fk_tipo", 6);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_hist = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>