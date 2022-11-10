<?php
include("conexao.php");
$id = $_GET["id"];

session_start();
$_SESSION['id_personagem'] = $id;

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
?>