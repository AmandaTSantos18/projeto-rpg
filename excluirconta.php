<?php
    include("conexao.php");

    session_start();
    $comando = $pdo -> prepare("SELECT id_personagem FROM personagem WHERE fk_usuario = :fk_usuario");
    $comando->bindValue(":fk_usuario",$_SESSION['id_usuario']); 
    $comando->execute();
    
    $personagens = $comando->fetchAll();

    unset($comando);
    unset($pdo);
    include("conexao.php");
    $comando = $pdo -> prepare("SELECT COUNT(id_personagem) FROM personagem WHERE fk_usuario = :fk_usuario");
    $comando->bindValue(":fk_usuario",$_SESSION['id_usuario']); 

    $quantidade = $comando->execute();
    unset($comando);
    unset($pdo);

    $i = 0;

    while ($i <> $quantidade){
    foreach ($personagens as $id) {
    
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM pericias WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fk_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);
    
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM atributos WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fk_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);
        
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM defesas WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fk_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);
    
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM saude WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fk_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);
    
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM resistencias_a_dano WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fk_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);
    
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM atual WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fk_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);
    
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM textos WHERE fk_personagem=:fk_personagem");
        $comando->bindValue(":fk_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);
    
        include("conexao.php");
        $comando = $pdo -> prepare("DELETE FROM personagem WHERE id_personagem=:id_personagem");
        $comando->bindValue(":id_personagem", $id['id_personagem']);
        $comando->execute();
    
        unset($comando);
        unset($pdo);

        $i++;
    }}

    include("conexao.php");
    $comando = $pdo -> prepare("DELETE FROM usuario WHERE id_usuario=:id_usuario");
    $comando->bindValue(":id_usuario",$_SESSION['id_usuario']); 

    $comando->execute();

    unset($comando);
    unset($pdo);
    header("Location:index.php");

?>