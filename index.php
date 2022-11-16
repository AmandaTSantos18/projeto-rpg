<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início</title>
    <link rel="stylesheet" href="css/estilotela1inicio.css">

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
        session_abort();
        session_start();
        $_SESSION['loggedin'] = false;
        $_SESSION['id_usuario'] = null;
    ?>
    <img src="img/logo.png" id="logo">

    <a href="tela2cadastro.php">
    <div class="botao_cadastro alinhado">
        CADASTRAR
    </div>  
    </a>
    
    <a href="tela3login.php">
    <div class="botao_login alinhado">
        LOGIN
    </div>
    </a>

    <label class="outros">LOGAR COM</label>  
    <div class="logos"> 
        <img src="img/facebook.png">
        &nbsp;
        <img src="img/google.png">
    </div>

</body>
</html>