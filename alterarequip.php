<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $dano = $_POST["dano"];
    $critico = $_POST["critico"];
    $espaco = $_POST["espaco"];
    $fk_tipo = $_POST["tipo"];
    $fk_categoria = $_POST["categoria"];
    $fk_alcance = $_POST["alcance"];
    $fk_municao = $_POST["municao"];


    $comando = $pdo->prepare("UPDATE equipamentos SET nome_equipamento = :nome, dano = :dano, critico = :critico, espaco = :espaco, fk_tipo = :fk_tipo, fk_categoria = :fk_categoria, fk_alcance = :fk_alcance, fk_municao = :fk_municao WHERE id_equipamentos = :id_equipamentos");

    session_start();
    $comando->bindValue(":id_equipamentos",$_SESSION['id_equipamentos']);
    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":dano",$dano);
    $comando->bindValue(":critico",$critico);                                     
    $comando->bindValue(":espaco",$espaco);    
    $comando->bindValue(":fk_tipo",$fk_tipo);  
    $comando->bindValue(":fk_categoria",$fk_categoria);                                     
    $comando->bindValue(":fk_alcance",$fk_alcance);    
    $comando->bindValue(":fk_municao",$fk_municao);

    $comando->execute();

    unset($comando);
    unset($pdo);

    header("location:listaequipadm.php");
?>