<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilotela4lista.css">
    <style>
            body
            {
                background-repeat: no-repeat;
                background-size: cover;
                
                background-image:url("img/fundo.png");
    
            }
        </style>
</head>
<body>

    <?php
        $_SESSION['id_personagem'] = null;
        $_SESSION['selected'] = false;
    ?>

    <div class="conteudo">
    <img src="img/logo.png" id="logo">
        <a href="criar.php">
            <div class="botao_criar alinhado">
                <img src="img/maiszinho.png" id="maiszinho"> 
                CRIAR
            </div>
        </a>

        <a href="listaequipadm.php">
            <div class="epadrao">EQUIPAMENTOS</div>
        </a>

        <table>
        <tbody>
        <div id="lista">
                <?php
                include("listar.php");
                
                if (!empty($personagens)) {
                    foreach ($personagens as $linha) { ?>
                        
                        <tr class="personagem">
                            <td class="id"> <?php echo $linha['id_personagem']; ?></td>
                            <td class="nome"> <?php echo $linha['nome']; ?></td>

                            <td class="delete"> 
                                <a href="deletar.php?id=<?php echo($linha['id_personagem']);?>">
                                    <img src="img/excluir.png" width="40px" height="40px">
                                </a>
                            </td>
                            <td class="btalt">
                                <a href="selectedalt.php?id=<?php echo($linha['id_personagem']);?>">
                                    <input type="button" class="alterar" value="ALTERAR">
                                </a>
                            </td>
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