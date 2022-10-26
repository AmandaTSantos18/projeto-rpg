<?php
    include("conexao.php");

    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $dano = $_POST["dano"];
    $critico = $_POST["critico"];
    $espaco = $_POST["espaco"];
    $fk_tipo = $_POST["tipo"];
    $fk_categoria = $_POST["categoria"];
    $fk_alcance = $_POST["alcance"];
    $fk_municao = $_POST["municao"];

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