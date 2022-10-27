<?php
    include("conexao.php");

    session_start();
    //comando sql.
    $id = $_SESSION['id_personagem'];
    $comando = $pdo->prepare("SELECT nome_pericia, valor FROM pericias WHERE fk_personagem=$id;");
    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_pericias = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>