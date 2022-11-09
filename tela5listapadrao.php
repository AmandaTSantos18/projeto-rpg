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
                NOVO <br> PERSONAGEM
            </div>
        </a>

        <select class="epadrao" id="qual" name="qual">
            <option value="div1">SEUS PERSONAGENS</option>
            <option value="div2">PERSONAGENS PADRÃO</option>
        </select>

        <table>
        <tbody>
                <?php
                include("listarpadrao.php");
                if (!empty($padrao)) {
                    foreach ($padrao as $linha) { ?>
                        
                        <tr class="personagem">
                            <td class="id"> <?php echo ($linha['id_personagem']); ?></td>
                            <td class="nome"> <?php echo ($linha['nome']); ?></td>
                        </tr>
                <?php } 
                }
                ?>
        </tbody>
        </table>
    </div>
</body>
</html>