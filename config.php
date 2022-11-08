<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configurações de Conta</title>

    <link rel="stylesheet" href="css/estiloconfig.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
    
    <div class="menu">
        <a href="ficha.php" id="voltar"><img src="img/voltar.png"></a>
        <h1>CONFIGURAÇÕES DE CONTA</h1>

                    <form action="alterar.php" method="POST" class="form">
                    <?php
                        include("qualusua.php");
                        if(!empty($qual_usua)) {
                        foreach ($qual_usua as $qual) {
                    ?>
                    <input type="text" class="input" name="nome" placeholder="NOME" value="<?php echo $qual['nome']; ?>">
                    <input type="text" class="input" name="email" placeholder="E-MAIL" value="<?php echo $qual['email']; ?>">
                    <input type="password" class="input" name="senha" placeholder="SENHA">
                    <?php
                        }}
                    ?>
            <input type="submit" value="ALTERAR" class="botao alterar">
        </form>
        <form action="excluirconta.php" method="POST" class="form">
            <input type="submit" value="EXCLUIR CONTA" class="botao excluir">
        </form>
            <a href="index.php"><input type="submit" value="SAIR" class="botao sair"></a>

    </div>
</body>
</html>