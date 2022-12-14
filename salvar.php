<?php
    /* CONFERINDO SE JÁ EXISTE PERSONAGEM COM ESSE NOME */
    include("conexao.php");
    
    session_start();
    if($_SESSION['selected'] = true)
    {
        /* INSERIR PERSONAGEM -------------------------------------------------- */
        include("conexao.php");
        $personagem = $_POST["personagem"];
        $origem = $_POST["origem"];
        $classe = $_POST["classe"]; 
        $trilha = $_POST["trilha"]; 
        $elemento = $_POST["elemento"];
        $patente = $_POST["patente"];
        $xp = $_POST["xp"];
        $pm = $_POST["pm"];
        $comando = $pdo -> prepare("SELECT id_personagem FROM personagem WHERE nome = :nome AND fk_usuario = :fk_usuario");
        $comando->bindValue(":nome",$personagem);
        $comando->bindValue(":fk_usuario", $_SESSION['id_usuario']);
        $comando->execute();
        if($comando->rowCount() >=1)
        {
            unset($comando);
            unset($pdo);
            echo('<script> alert("Você já criou um personagem com esse nome.");
            window.close();
            </script>');
        }else{
            unset($comando);
            unset($pdo);
            include("conexao.php");
            if($_SESSION['is_adm'] > 0)
        {
            $comando = $pdo -> prepare("UPDATE personagem SET nome=:nome, fk_origem=:fk_origem, fk_classe=:fk_classe , fk_trilha=:fk_trilha , fk_elemento=:fk_elemento, fk_patente=:fk_patente, xp=:xp, pm=:pm WHERE id_personagem=:id_personagem");
            $comando->bindValue(":nome",$personagem);
            $comando->bindValue(":fk_origem",$origem);
            $comando->bindValue(":fk_classe",$classe);
            $comando->bindValue(":fk_trilha",$trilha);
            $comando->bindValue(":fk_elemento",$elemento);
            $comando->bindValue(":fk_patente",$patente);
            $comando->bindValue(":xp",$xp);
            $comando->bindValue(":pm",$pm);
            $comando->bindValue(":id_personagem",$_SESSION['id_personagem']);
            $comando->execute();
            unset($comando);
            unset($pdo);
        }else
        {
            $jogador = $_POST["jogador"];
            $comando = $pdo -> prepare("UPDATE personagem SET nome=:nome, jogador=:jogador, fk_origem=:fk_origem, fk_classe=:fk_classe, fk_trilha=:fk_trilha, fk_elemento=:fk_elemento, fk_patente=:fk_patente, xp=:xp, pm=:pm WHERE id_personagem=:id_personagem");
            $comando->bindValue(":nome",$personagem);
            $comando->bindValue(":jogador",$jogador);
            $comando->bindValue(":fk_origem",$origem);
            $comando->bindValue(":fk_classe",$classe);
            $comando->bindValue(":fk_trilha",$trilha);
            $comando->bindValue(":fk_elemento",$elemento);
            $comando->bindValue(":fk_patente",$patente);
            $comando->bindValue(":xp",$xp);
            $comando->bindValue(":pm",$pm);
            $comando->bindValue(":id_personagem",$_SESSION['id_personagem']);
            $comando->execute();
            unset($comando);
            unset($pdo);
        }
        /* INSERIR ATRIBUTOS -------------------------------------------------- */
        include("conexao.php");
        $agilidade = $_POST["agilidade"];
        $intelecto = $_POST["intelecto"];
        $vigor = $_POST["vigor"];
        $presenca = $_POST["presenca"];
        $forca = $_POST["forca"];
        $nex = $_POST["nex"];
        
        $comando = $pdo -> prepare("UPDATE atributos SET agilidade=:agilidade, intelecto=:intelecto, vigor=:vigor, presenca=:presenca, forca=:forca, nex=:nex WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":agilidade",$agilidade);    
        $comando->bindValue(":intelecto",$intelecto); 
        $comando->bindValue(":vigor",$vigor);    
        $comando->bindValue(":presenca",$presenca); 
        $comando->bindValue(":forca",$forca); 
        $comando->bindValue(":nex",$nex);   
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);
        
        /* INSERIR SAUDE -------------------------------------------------- */
        include("conexao.php");
        $vida = $_POST["vida"];
        $sanidade = $_POST["sanidade"];
        $esforco = $_POST["esforco"];
        $comando = $pdo -> prepare("UPDATE saude SET vida=:vida, sanidade=:sanidade, esforco=:esforco WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":vida",$vida);
        $comando->bindValue(":sanidade",$sanidade);
        $comando->bindValue(":esforco",$esforco);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);
        /* INSERIR ATUAL -------------------------------------------------- */
        include("conexao.php");
        
        $vida_atual = $_POST["vida_atual"];
        $sanidade_atual = $_POST["sanidade_atual"];
        $esforco_atual = $_POST["esforco_atual"];
        $municao_atual = $_POST["municao_atual"];
        $deslocamento = $_POST["deslocamento"];
        $comando = $pdo -> prepare("UPDATE atual SET vida_atual=:vida_atual, sanidade_atual=:sanidade_atual, esforco_atual=:esforco_atual, municao_atual=:municao_atual ,deslocamento=:deslocamento WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":vida_atual",$vida_atual);
        $comando->bindValue(":sanidade_atual",$sanidade_atual);
        $comando->bindValue(":esforco_atual",$esforco_atual);
        $comando->bindValue(":municao_atual",$municao_atual);
        $comando->bindValue(":deslocamento",$deslocamento);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);
        /* INSERIR DEFESAS -------------------------------------------------- */
        include("conexao.php");
        $passiva = $_POST["passiva"];
        $bloqueio = $_POST["bloqueio"];
        $esquiva = $_POST["esquiva"];
        $comando = $pdo -> prepare("UPDATE defesas SET passiva=:passiva, bloqueio=:bloqueio, esquiva=:esquiva WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":passiva",$passiva);
        $comando->bindValue(":bloqueio",$bloqueio);
        $comando->bindValue(":esquiva",$esquiva);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);
        /* INSERIR TEXTOS -------------------------------------------------- */
        include("conexao.php");
        $proficiencias = $_POST["proficiencias"];
        $ataquesedefesas = $_POST["ataquesedefesas"];
        $inventario = $_POST["inventario"];
        $habilidades = $_POST["habilidades"];
        $rituais = $_POST["rituais"];
        $historico = $_POST["historico"];
            /* INVENTÁRIO -------------------------------------------------- */
            $comando = $pdo -> prepare("UPDATE textos SET escrito=:escrito WHERE fk_tipo=:fk_tipo AND fk_personagem=:fk_personagem");
            $comando->bindValue(":escrito",$inventario);
            $comando->bindValue(":fk_tipo", 1);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* PROFICIÊNCIAS -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("UPDATE textos SET escrito=:escrito WHERE fk_tipo=:fk_tipo AND fk_personagem=:fk_personagem");
            $comando->bindValue(":escrito",$proficiencias);
            $comando->bindValue(":fk_tipo", 2);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* ATAQUES E DEFESAS DETALHADOS -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("UPDATE textos SET escrito=:escrito WHERE fk_tipo=:fk_tipo AND fk_personagem=:fk_personagem");
            $comando->bindValue(":escrito",$ataquesedefesas);
            $comando->bindValue(":fk_tipo", 3);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* RITUAIS CONHECIDOS -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("UPDATE textos SET escrito=:escrito WHERE fk_tipo=:fk_tipo AND fk_personagem=:fk_personagem");
            $comando->bindValue(":escrito",$rituais);
            $comando->bindValue(":fk_tipo", 4);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* HABILIDADES -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("UPDATE textos SET escrito=:escrito WHERE fk_tipo=:fk_tipo AND fk_personagem=:fk_personagem");
            $comando->bindValue(":escrito",$habilidades);
            $comando->bindValue(":fk_tipo", 5);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* HISTÓRICO -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("UPDATE textos SET escrito=:escrito WHERE fk_tipo=:fk_tipo AND fk_personagem=:fk_personagem");
            $comando->bindValue(":escrito",$historico);
            $comando->bindValue(":fk_tipo", 6);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
        
        /* INSERIR RESISTENCIAS A DANO -------------------------------------------------- */
        include("conexao.php");
        $resistencia_fisica = $_POST["resistencia_fisica"];
        $resistencia_balistica = $_POST["resistencia_balistica"];
        $resistencia_mental = $_POST["resistencia_mental"];
        $resistencia_morte = $_POST["resistencia_morte"];
        $resistencia_sangue = $_POST["resistencia_sangue"];
        $resistencia_conhecimento = $_POST["resistencia_conhecimento"];
        $resistencia_energia = $_POST["resistencia_energia"];
        $comando = $pdo -> prepare("UPDATE resistencias_a_dano SET fisica=:fisica, balistica=:balistica, mental=:mental, sangue=:sangue, morte=:morte, energia=:energia, conhecimento=:conhecimento WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fisica",$resistencia_fisica);
        $comando->bindValue(":balistica",$resistencia_balistica);
        $comando->bindValue(":mental",$resistencia_mental);
        $comando->bindValue(":sangue",$resistencia_sangue);
        $comando->bindValue(":morte",$resistencia_morte);
        $comando->bindValue(":energia",$resistencia_energia);
        $comando->bindValue(":conhecimento",$resistencia_conhecimento);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);

        if($_SESSION['is_adm'] == 1)
        {
            $_SESSION['selected'] = false;
            header("location: listapersoadm.php");
        }else{
            $_SESSION['selected'] = false;
            header("location: tela4lista.php");
        }
        }
    }