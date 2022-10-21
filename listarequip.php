<?php
    include("conexao.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT id_equipamentos, nome_equipamento, dano, critico, fk_tipo, fk_categoria, fk_alcance, fk_municao, espaco  FROM equipamentos;");
    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_equipamentos = $comando->fetchAll();
    }else{
        echo("Não há equipamentos criados.");
    }

    unset($comando);
    unset($pdo);
?>