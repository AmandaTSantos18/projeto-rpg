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

    $comando = $pdo -> prepare("INSERT INTO equipamentos(nome_equipamento,dano,critico,espaco,fk_tipo,fk_categoria,fk_alcance,fk_municao) 
                                                VALUES(:nome_equipamento,:dano,:critico,:espaco,:fk_tipo,:fk_categoria,:fk_alcance,:fk_municao)");
    
    $comando->bindValue(":nome_equipamento",$nome); 
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
    header("location:criarequipamento.php");
?>