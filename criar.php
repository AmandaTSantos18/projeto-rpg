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
        $comando = $pdo->prepare("INSERT INTO personagem(nome, jogador, fk_usuario) VALUES(:nome,:jogador,:fk_usuario)");
        $comando->bindValue(":nome", $teste);
        $comando->bindValue(":jogador", $teste);
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

    }

?>