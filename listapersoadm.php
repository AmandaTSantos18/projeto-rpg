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
    <style>
            body
            {
                background-repeat: no-repeat;
                background-size: cover;
                
                background-image:url("img/fundo.png");
    
            }
        </style>

    <div class="conteudo">
    <img src="img/logo.png" id="logo">
        <a href="fichaadm.php">
            <div class="botao_criar alinhado">
                <img src="img/maiszinho.png" id="maiszinho"> 
                CRIAR
            </div>
        </a>

        <select class="epadrao" id="qual">
            <option value="seu">PERSONAGENS PADRÃO</option>
            <option value="padrao">EQUIPAMENTOS</option>
        </select>

        <table>
        <tbody>
        <div id="lista">
                <?php
                include("listar.php");
                
                //verifica se a variável tem os valores da tabela.
                if (!empty($lista_personagens)) {
                    //seleciona linha por linha.
                    foreach ($lista_personagens as $linha) { ?>
                        <tr class="personagem">
                            <td class="nome" name="nome"> <?php echo $linha['nome']; ?></td>
                            <td class="delete"> <img src="img/excluir.png" width="40px" height="40px"></td>
                        </tr>
                <?php } 
                }
                ?>
        </div>
        </tbody>
        </table>
    </div>
</body>
</html>