<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilotela4lista.css">
</head>
<body>
    <img src="img/simbolosfundinho.png" id="fundinho">

    <div class="conteudo">
    <img src="img/logo.png" id="logo">
        <a href="ficha.php">
            <div class="botao_criar alinhado">
                <img src="img/maiszinho.png" id="maiszinho"> 
                NOVO <br> PERSONAGEM
            </div>
        </a>

        <select class="epadrao" id="qual">
            <option value="seu">SEUS PERSONAGENS</option>
            <option value="padrao">PERSONAGENS PADRÃO</option>
        </select>

        <table>
        <tbody>
        <div id="lista">
                <?php
                include("listar.php");
                
                //verifica se a variável tem os valores da tabela.
                if (!empty($lista_usuarios)) {
                    //seleciona linha por linha.
                    foreach ($lista_usuarios as $linha) { ?>
                        <tr class="personagem" >
                            <td class="nome"> <?php echo $linha['nome']; ?></td>
                            <td class="jogador"> <?php echo $linha['jogador']; ?></td>
                            <td class="delete"> <img src="img/excluir.png" width="40px" height="40px" onclick="Deletar(<?php echo $linha['nome']; ?>);"> </td>
                        </tr>
                <?php } 
                }
                ?>
        </div>
        </tbody>
        </table>
    </div>
</body>
<script>
        function Deletar(codigo)
        {
            var resposta = prompt("Deseja realmente excluir?", "N");
            if( resposta == "S" || resposta == "s")
            {
                window.open("deletar.php?codigo=" + codigo,"_self");
            }
            
        }
</script>
</html>