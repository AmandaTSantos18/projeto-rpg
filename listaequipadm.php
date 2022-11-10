<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilolistaequipadm.css">
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
        <a href="criarequipamento.php">
            <div class="botao_criar alinhado">
                <img src="img/maiszinho.png" id="maiszinho"> 
                CRIAR
            </div>
        </a>

        <a href="listapersoadm.php">
            <div class="epadrao">PERSONAGENS</div>
        </a>

        <table class="lista">
        <tbody>
        <div>
                <?php
                include("listarequip.php");
                
                //verifica se a variável tem os valores da tabela.
                if (!empty($lista_equipamentos)) {
                    //seleciona linha por linha.
                    foreach ($lista_equipamentos as $linha) { ?>
                        <tr class="equipamento">
                            <td class="id"> <?php echo $linha['id_equipamentos']; ?></td>
                            <td class="nome_equip"> <?php echo $linha['nome_equipamento']; ?></td>
                            <td class="dano"> <?php echo $linha['dano']; ?></td>
                            <td class="critico"> <?php echo $linha['critico']; ?></td>
                            <td class="tipo"> <?php echo $linha['fk_tipo']; ?></td>
                            <td class="categoria"> <?php echo $linha['fk_categoria']; ?></td>
                            <td class="alcance"> <?php echo $linha['fk_alcance']; ?></td>
                            <td class="municao"> <?php echo $linha['fk_municao']; ?></td>
                            <td class="espaco"> <?php echo $linha['espaco']; ?></td>

                            <td class="btalt">
                                <a href="alterarequip.php?id=<?php echo($linha['id_equipamentos']);?>">
                                    <input type="button" class="alterar" value="ALTERAR">
                                </a>
                            </td>
                            <td class="delete"> 
                                <a href="excluirequip.php?id=<?php echo($linha['id_equipamentos']);?>">
                                    <img src="img/excluir.png" width="40px" height="40px">
                                </a>
                            </td>
                           <!--  https://blog.betrybe.com/javascript/javascript-alert/ -->
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