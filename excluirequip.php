<?php
include("conexao.php");

$id=$_GET["id_equipamentos"];

$comando=$pdo->prepare("DELETE FROM equipamentos WHERE id_equipamentos=:id");
$comando->bindValue(":id",$id); 
$comando->execute();

header("Location:criarequipamento.php");
?>