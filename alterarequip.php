<?php
    include("conexao.php");

    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $dano = $_GET["dano"];
    $critico = $_GET["critico"];
    $espaco = $_GET["espaco"];
    $fk_tipo = $_GET["tipo"];
    $fk_categoria = $_GET["categoria"];
    $fk_alcance = $_GET["alcance"];
    $fk_municao = $_GET["municao"];

    print_r($critico);
    die();
    //comando sql.
    $comando = $pdo->prepare("UPDATE equipamentos SET nome = :nome, dano = :dano, critico = :critico, espaco = :espaco, fk_tipo = :fk_tipo, fk_categoria = :fk_categoria, fk_alcance = :fk_alcance, fk_municao = :fk_municao WHERE id_equipamentos = :id_equipamentos;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':id_equipamentos',$id);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':dano',$dano);
    $comando->bindValue(":critico",$critico);                                     
    $comando->bindValue(":espaco",$espaco);    
    $comando->bindValue(":fk_tipo",$fk_tipo);  
    $comando->bindValue(":fk_categoria",$fk_categoria);                                     
    $comando->bindValue(":fk_alcance",$fk_alcance);    
    $comando->bindValue(":fk_municao",$fk_municao);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:criarequipamento.php");
?>