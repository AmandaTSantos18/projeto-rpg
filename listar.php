<?php
    include("conexao.php");

    session_start();
    //comando sql.
    $id = $_SESSION['id_usuario'];
    $comando = $pdo->prepare("SELECT nome, jogador FROM personagem WHERE fk_usuario=$id;");
    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_usuarios = $comando->fetchAll();
    }else{
        echo("Não há personagens criados.");
    }
    unset($comando);
    unset($pdo);
?>