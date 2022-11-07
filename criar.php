<?php
 /* PROCURA SE JÁ EXISTE UM PERSONAGEM SEM NOME */
    include("conexao.php");
    $teste = "sem nome";
    $comando = $pdo->prepare("SELECT id_personagem FROM personagem WHERE nome = :nome AND fk_usuario =:fk_usuario;");
    session_start();
    $comando->bindValue(":nome", $teste);
    $comando->bindValue(":fk_usuario", $_SESSION['id_usuario']);
    $comando->execute();   

    if($comando->rowCount() > 0)
    {
        if($_SESSION['is_adm'] == 1)
        {
            unset($comando);
            unset($pdo);
            echo('<script> alert("Você ainda tem um personagem sem nome.");
            window.open("listapersoadm.php","_self");
            </script>');
        }else
        {
            unset($comando);
            unset($pdo);
            echo('<script> alert("Você ainda tem um personagem sem nome.");
            window.open("tela4lista.php","_self");
            </script>');
        }
    }else{
        unset($comando);
        unset($pdo);
    /* SE NÃO HOUVER PERSONAGEM SEM NOME, VAI SER INSERIDO UM */
        include("conexao.php");
        $comando = $pdo->prepare("INSERT INTO personagem(nome, jogador, is_padrao, fk_usuario) VALUES(:nome,:jogador, :is_padrao,:fk_usuario)");
        $comando->bindValue(":nome", $teste);
        $comando->bindValue(":jogador", $teste);
        $comando->bindValue(":is_padrao",$_SESSION['is_adm']);
        $comando->bindValue(":fk_usuario",$_SESSION['id_usuario']); 
        $comando->execute();
    
        unset($comando);
        unset($pdo);

    /* PEGANDO O ID DESSE NOVO PERSONAGEM */
        include("conexao.php");
        $comando = $pdo->prepare("SELECT id_personagem FROM personagem WHERE nome = :nome AND fk_usuario =:fk_usuario;");
        $comando->bindValue(":nome", $teste);
        $comando->bindValue(":fk_usuario", $_SESSION['id_usuario']);
        $comando->execute();   

        if($comando->rowCount() > 0)
        {
            $resultado = $comando->fetch();
    
            $_SESSION['id_personagem'] = $resultado['id_personagem'];
            $_SESSION['selected'] = true;
        }

        /* INSERIR ATRIBUTOS -------------------------------------------------- */
        include("conexao.php");

        $primeiro = "0";

        $comando = $pdo -> prepare("INSERT INTO atributos(agilidade,intelecto,vigor,presenca,forca,nex,fk_personagem)
                                    VALUES(:agilidade,:intelecto,:vigor,:presenca,:forca,:nex,:fk_personagem)");
        $comando->bindValue(":agilidade",$primeiro);    
        $comando->bindValue(":intelecto",$primeiro); 
        $comando->bindValue(":vigor",$primeiro);    
        $comando->bindValue(":presenca",$primeiro); 
        $comando->bindValue(":forca",$primeiro); 
        $comando->bindValue(":nex",$primeiro);   
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);

        /* INSERIR SAUDE -------------------------------------------------- */
        include("conexao.php");

        $comando = $pdo -> prepare("INSERT INTO saude(vida,sanidade,esforco,fk_personagem)
                                    VALUES (:vida,:sanidade,:esforco,:fk_personagem)");
        $comando->bindValue(":vida",$primeiro);
        $comando->bindValue(":sanidade",$primeiro);
        $comando->bindValue(":esforco",$primeiro);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);

        /* INSERIR ATUAL -------------------------------------------------- */
        include("conexao.php");

        $comando = $pdo -> prepare("INSERT INTO atual(vida_atual,sanidade_atual,esforco_atual,municao_atual,fk_personagem)
                                    VALUES (:vida_atual,:sanidade_atual,:esforco_atual,:municao_atual,:fk_personagem)");
        $comando->bindValue(":vida_atual",$primeiro);
        $comando->bindValue(":sanidade_atual",$primeiro);
        $comando->bindValue(":esforco_atual",$primeiro);
        $comando->bindValue(":municao_atual",$primeiro);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);

        /* INSERIR DEFESAS -------------------------------------------------- */
        include("conexao.php");

        $comando = $pdo -> prepare("INSERT INTO defesas(passiva,bloqueio,esquiva,fk_personagem)
                                    VALUES (:passiva,:bloqueio,:esquiva,:fk_personagem)");
        $comando->bindValue(":passiva",$primeiro);
        $comando->bindValue(":bloqueio",$primeiro);
        $comando->bindValue(":esquiva",$primeiro);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);

        /* INSERIR TEXTOS -------------------------------------------------- */
        include("conexao.php");

        $texto = null;
            /* INVENTÁRIO -------------------------------------------------- */
            $comando = $pdo -> prepare("INSERT INTO textos(escrito,fk_tipo,fk_personagem)
                                        VALUES (:escrito,:fk_tipo,:fk_personagem)");
            $comando->bindValue(":escrito",$texto);
            $comando->bindValue(":fk_tipo", 1);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* PROFICIÊNCIAS -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("INSERT INTO textos(escrito,fk_tipo,fk_personagem)
                                        VALUES (:escrito,:fk_tipo,:fk_personagem)");
            $comando->bindValue(":escrito",$texto);
            $comando->bindValue(":fk_tipo", 2);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* ATAQUES E DEFESAS DETALHADOS -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("INSERT INTO textos(escrito,fk_tipo,fk_personagem)
                                        VALUES (:escrito,:fk_tipo,:fk_personagem)");
            $comando->bindValue(":escrito",$texto);
            $comando->bindValue(":fk_tipo", 3);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* RITUAIS CONHECIDOS -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("INSERT INTO textos(escrito,fk_tipo,fk_personagem)
                                        VALUES (:escrito,:fk_tipo,:fk_personagem)");
            $comando->bindValue(":escrito",$texto);
            $comando->bindValue(":fk_tipo", 4);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* HABILIDADES -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("INSERT INTO textos(escrito,fk_tipo,fk_personagem)
                                        VALUES (:escrito,:fk_tipo,:fk_personagem)");
            $comando->bindValue(":escrito",$texto);
            $comando->bindValue(":fk_tipo", 5);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);
            /* HISTÓRICO -------------------------------------------------- */
            include("conexao.php");
            $comando = $pdo -> prepare("INSERT INTO textos(escrito,fk_tipo,fk_personagem)
                                        VALUES (:escrito,:fk_tipo,:fk_personagem)");
            $comando->bindValue(":escrito",$texto);
            $comando->bindValue(":fk_tipo", 6);
            $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
            $comando->execute();
            unset($comando);
            unset($pdo);

        /* INSERIR RESISTENCIAS A DANO -------------------------------------------------- */
        include("conexao.php");

        $comando = $pdo -> prepare("INSERT INTO resistencias_a_dano(fisica,balistica,mental,sangue,morte,energia,conhecimento,fk_personagem)
                                    VALUES (:fisica,:balistica,:mental,:sangue,:morte,:energia,:conhecimento,:fk_personagem)");
        $comando->bindValue(":fisica",$primeiro);
        $comando->bindValue(":balistica",$primeiro);
        $comando->bindValue(":mental",$primeiro);
        $comando->bindValue(":sangue",$primeiro);
        $comando->bindValue(":morte",$primeiro);
        $comando->bindValue(":energia",$primeiro);
        $comando->bindValue(":conhecimento",$primeiro);
        $comando->bindValue(":fk_personagem",$_SESSION['id_personagem']); 
        $comando->execute();
        unset($comando);
        unset($pdo);
        if($_SESSION['is_adm'] == 1)
        {
            unset($comando);
            unset($pdo);
            header("location:fichaadm.php");
        }else
        {
            unset($comando);
            unset($pdo);
            header("location:ficha.php");
        }

    }

?>