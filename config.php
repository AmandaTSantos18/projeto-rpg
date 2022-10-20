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
        <a href="ficha.php"><img src="img/voltar.png"></a>
        <h1>CONFIGURAÇÕES DE CONTA</h1>

        <?php
            include("conexao.php");

            session_start();
            $id = $_SESSION['id_usuario'];
            $comando = $pdo->prepare("SELECT nome, email  FROM usuario WHERE id_usuario=$id;");
            $comando->execute();
            $resultado = $comando->fetch();
            ?>
                    <form action="alterar.php" method="POST" class="form">
                    <input type="text" class="input" name="nome" placeholder="NOME" value="<?php$resultado['nome'];?>">
                    <input type="text" class="input" name="email" placeholder="E-MAIL" value="<?php$resultado['email'];?>">
                    <input type="password" class="input" name="senha" placeholder="SENHA">

            <input type="submit" value="ALTERAR" class="botao alterar">
        </form>
        <form action="excluirconta.php" method="POST" class="form">
            <input type="submit" value="EXCLUIR CONTA" class="botao excluir">
        </form>
            <a href="index.php"><input type="submit" value="SAIR" class="botao sair"></a>

    </div>
</body>
</html>